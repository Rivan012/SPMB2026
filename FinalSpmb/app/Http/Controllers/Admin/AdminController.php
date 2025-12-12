<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $usersiswa = User::with('student.major')->where('role', 'student')->get();
        $usersiswatotal = User::where('role', 'student')->count();


        return view('panel-admin.index', [
            'usersiswa' => $usersiswa,
            'usersiswatotal' => $usersiswatotal,
        ]);
    }
}
