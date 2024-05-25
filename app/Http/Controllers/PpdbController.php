<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function daftar()
    {
        return view('ppdb.daftar');
    }
    public function formdata(){
        return view('ppdb.formdata');
    }
    public function formnilai(){
        return view('ppdb.formnilai');
    }
    public function formjurusan(){
        return view('ppdb.formjurusan');
    }
    public function pembayaran()
    {
        return view('ppdb.pembayaran');
    }
    public function listpen()
    {
        return view('ppdb.listpen');
    }
    public function pengumuman()
    {
        return view('ppdb.pengumuman');
    }
}
