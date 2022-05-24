<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_Laporan extends Model
{
    use HasFactory;

    //tambahkan kode berikut
    protected $fillable = [
        'tanggal', 'jam', 'judul_pekerjaan', 'deskripsi_pekerjaan'
    ];
}
