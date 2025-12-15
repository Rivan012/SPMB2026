<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $data = User::with('student')->where('id', auth()->user()->id)->first();
        return view('siswa.biodata', compact('data'));
    }

    public function index1(Request $request)
    {
        return view('siswa.biodata1');
    }
    public function index2()
    {
        return view('siswa.biodata2');
    }
    public function post(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nisn' => 'required',
            'tmpt_lhr' => 'required',
            'tanggal_lhr' => 'required|date',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'no_wa' => 'required',
            // 'major_id' => 'required|exists:majors,id',
        ]);

        Student::where('user_id', Auth::id())->update([
            'nisn' => $validated['nisn'],
            'full_name' => $validated['name'],
            'birth_place' => $validated['tmpt_lhr'],
            'birth_date' => $validated['tanggal_lhr'],
            'gender' => $validated['jenis_kelamin'],
            'religion' => $validated['agama'],
            'address' => $validated['alamat'],
            'phone_number' => $validated['no_wa'],
        ]);



        return view('siswa.biodata1');
    }
}
