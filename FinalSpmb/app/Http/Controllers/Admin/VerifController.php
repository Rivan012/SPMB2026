<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerifController extends Controller
{
    public function index()
    {
        
        return view('panel-admin.verif.index');
    }
}
