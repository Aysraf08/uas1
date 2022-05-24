<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbl_Laporan;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form_input', [
            "data_laporan" => Tbl_Laporan::where('tanggal', '=', date('Y-m-d'))->orderBy('created_at','desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'jam' => 'required',
            'judul_pekerjaan' => 'required',
            'deskripsi_pekerjaan' => 'required',
        ]);
      
        Tbl_Laporan::create($request->all());
        
        return redirect('/laporan')->with('success','Data Telah Terkirim.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {      
        //  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {        
        $validasi = $request->validate([
            'tanggal' => 'required',
            'jam' => 'required',
            'judul_pekerjaan' => 'required',
            'deskripsi_pekerjaan' => 'required',
        ]);
      
        Tbl_Laporan::where('id', $id)
                    ->update($validasi);
        
        return redirect('/laporan')->with('success','Data Telah Diedit.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tbl_Laporan::destroy($id);
        
        return redirect('/laporan')->with('success','Data Terhapus.');
    }
    
}
