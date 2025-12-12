<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        return view('siswa.biodata');
    }
    public function index1()
    {
        return view('siswa.biodata1');
    }
    public function index2()
    {
        return view('siswa.biodata2');
    }
}
