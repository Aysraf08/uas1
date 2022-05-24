<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbl_Laporan;

class DataController extends Controller
{
    
    public function index()
    {
        return view('data_laporan', [
            "data_laporan" => Tbl_Laporan::where('tanggal', '=', date('Y-m-d'))->orderBy('created_at','desc')->get()
        ]);
    }
}
