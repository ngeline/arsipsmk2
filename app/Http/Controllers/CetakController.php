<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class CetakController extends Controller
{
    public function createPdf(Request $request)
    {
        $post = $request->validate([
            'tanggalAwal' => 'required|date',
            'tanggalAkhir' => 'required|date'
        ]);

        $dompdf = new Dompdf();
        $role = auth()->user()->getNameRole();
        $getIdUser = auth()->user()->id;
        if ($role === 'Admin') {
            $surat_masuks = SuratMasuk::whereBetween('tanggal_surat', [$post['tanggalAwal'], $post['tanggalAkhir']])
            ->orderBy('updated_at', 'desc')
            ->get();
        } else {
            $surat_masuks = SuratMasuk::where('user_id', $getIdUser)
            ->whereBetween('tanggal_surat', [$post['tanggalAwal'], $post['tanggalAkhir']])
            ->orderBy('updated_at', 'desc')
            ->get();
        }
        // dd($surat_masuks);
        $html = '<style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        </style>';
        $html .= '<center><h3>Daftar Surat Masuk</h3></center><hr/><br/>';
        $html .= '<table width="100%">
                <thead>
                    <th scope="col">No</th>
                    <th scope="col">Dari</th>
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
        foreach ($surat_masuks as $surat_masuk) {
            $html .= "<tbody>
            <tr>
            <td>&nbsp; ".$no++." &nbsp;</td>
            <td>&nbsp; $surat_masuk->dari &nbsp;</td>
            <td>&nbsp; $surat_masuk->alamat &nbsp;</td>
            <td>&nbsp; $surat_masuk->nomor_surat &nbsp;</td>
            <td>&nbsp; $surat_masuk->tanggal_surat &nbsp;</td>
            <td>&nbsp; $surat_masuk->dokumen &nbsp;</td>
            <td>&nbsp; $surat_masuk->perihal_surat &nbsp;</td>
            <td>&nbsp; $surat_masuk->tanggal_input &nbsp;</td>
            <td>&nbsp; $surat_masuk->kode_simpan &nbsp;</td>
            <td>&nbsp; $surat_masuk->keterangan &nbsp;</td>
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
