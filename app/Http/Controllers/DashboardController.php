<?php

namespace App\Http\Controllers;

use App\Models\SifatSurat;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jmlsrtmsk = SuratMasuk::count();

        $jmlsrtklr = SuratKeluar::count();

        $jmlsftsrt = SifatSurat::count();

        return view('admin.dashboard.index', compact('jmlsrtmsk','jmlsrtklr','jmlsftsrt'));
    }
}
