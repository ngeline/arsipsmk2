<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class CetakController extends Controller
{
    public function createPdf(Request $request, $model)
    {
        $post = $request->validate([
            'tanggalAwal' => 'required|date',
            'tanggalAkhir' => 'required|date'
        ]);

        $dompdf = new Dompdf();
        $role = auth()->user()->getNameRole();
        $getIdUser = auth()->user()->id;
        $tujuanSurat = $model == 'SuratMasuk' ? "Dari" : "Kepada";


        if ($role === 'Admin') {
            if ($model === 'SuratMasuk') {
                $surats = SuratMasuk::whereBetween('tanggal_surat', [$post['tanggalAwal'], $post['tanggalAkhir']])
                ->orderBy('updated_at', 'desc')
                ->get();
            } elseif ($model === 'SuratKeluar') {
                $surats = SuratKeluar::whereBetween('tanggal_surat', [$post['tanggalAwal'], $post['tanggalAkhir']])
                ->orderBy('updated_at', 'desc')
                ->get();
            }
        } else {
            if ($model === 'SuratMasuk') {
                $surats = SuratMasuk::where('user_id', $getIdUser)
                ->whereBetween('tanggal_surat', [$post['tanggalAwal'], $post['tanggalAkhir']])
                ->orderBy('updated_at', 'desc')
                ->get();
            } elseif ($model === 'SuratKeluar') {
                $surats = SuratKeluar::where('user_id', $getIdUser)
                ->whereBetween('tanggal_surat', [$post['tanggalAwal'], $post['tanggalAkhir']])
                ->orderBy('updated_at', 'desc')
                ->get();
            }
        }

        $html = '<style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        </style>';
        $html .= '<center><h3>Daftar Surat Masuk</h3></center><center><p>'. $post['tanggalAwal'] .' - '. $post['tanggalAkhir'] .'</p></center><hr/><br/>';
        $html .= '<table width="100%">
                <thead>
                    <th scope="col">No</th>
                    <th scope="col">'.$tujuanSurat.'</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor Surat</th>
                    <th scope="col">Tanggal Surat</th>
                    <th scope="col">Dokumen</th>
                    <th scope="col">Perihal Surat</th>
                    <th scope="col">Tanggal Input</th>
                    <th scope="col">Kode Simpan</th>
                    <th scope="col">Keterangan</th>
                </thead>';
        $no = 1;

        foreach ($surats as $surat) {
            $tipeSurat = $model == 'SuratMasuk' ? $surat->dari : $surat->kepada;
            $html .= "<tbody>
            <tr>
            <td>".$no++." &nbsp;</td>
            <td>". $tipeSurat ." &nbsp;</td>
            <td>$surat->alamat &nbsp;</td>
            <td>$surat->nomor_surat &nbsp;</td>
            <td>$surat->tanggal_surat &nbsp;</td>
            <td>$surat->dokumen &nbsp;</td>
            <td>$surat->perihal_surat &nbsp;</td>
            <td>$surat->tanggal_input &nbsp;</td>
            <td>$surat->kode_simpan &nbsp;</td>
            <td>$surat->keterangan &nbsp;</td>
            </tr>
            </tbody>
            ";
        }

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }
}
