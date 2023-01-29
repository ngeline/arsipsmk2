<?php

namespace App\Http\Controllers;

use App\Models\SifatSurat;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use App\Models\Disposisi;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jmlsrtmsk = SuratMasuk::count();

        $jmlsrtklr = SuratKeluar::count();

        $jmldspss = Disposisi::count();

        $jmlsftsrt = SifatSurat::count();

        return view('dashboard.index', compact('jmlsrtmsk','jmlsrtklr','jmlsftsrt' ,'jmldspss'));
    }

    public function indexsiswa()
    {
        $jmlsrtmsk = SuratMasuk::count();

        $jmlsrtklr = SuratKeluar::count();

        $jmldspss = Disposisi::count();

        $jmlsftsrt = SifatSurat::count();

        return view('dashboard.index', compact('jmlsrtmsk','jmlsrtklr','jmlsftsrt' ,'jmldspss'));
    }
}
