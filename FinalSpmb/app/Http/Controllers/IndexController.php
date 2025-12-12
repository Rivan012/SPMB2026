<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $major = Major::all();
        return view('welcome', compact('major'));
    }
}
