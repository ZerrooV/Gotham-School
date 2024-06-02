<?php

namespace App\Http\Controllers;

use App\Models\raport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function storeform(Request $request){

        $validator = Validator::make($request -> all(),[
            'nisn' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'nik' => 'required',
            'nomor_HP' => 'required',
            'foto' => 'required|mimes:png,jpg,jpeg|max:2048',
            'jurusan' => 'required',
            'indonesia_semester_*' => 'required|max:100',
            'inggris_semester_*' => 'required|max:100',
            'matematika_semester_*' => 'required|max:100',
            'ipa_semester_*' => 'required|max:100',
            'ppkn_semester_*' => 'required|max:100',
        ]);

        if($validator -> fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $userID = Auth::id();
        $user = User::find($userID);

        if ($user) {

            $user->update([
                'nisn' => $request->input('nisn'),
                'tanggal_lahir' => $request->input('tanggal_lahir'),
                'tempat_lahir' => $request->input('tempat_lahir'),
                'jenis_kelamin' => $request->input('jenis_kelamin'),
                'alamat' => $request->input('alamat'),
                'nik' => $request->input('nik'),
                'nomor_HP' => $request->input('nomor_HP'),
                'foto' => $request->hasFile('foto') ? $request->file('foto')->store('foto-user', 'public') : $user->foto,
                'jurusan' => $request->input('jurusan'),
                'payment' => 'Belum Bayar',
                'status' => 'Pending',
            ]);

            foreach (range(1, 5) as $semester) {
                raport::create([
                    'user_id' => $user->id,
                    'semester' => $semester,
                    'bahasa_indonesia' => $request->input("indonesia_semester_{$semester}"),
                    'bahasa_inggris' => $request->input("inggris_semester_{$semester}"),
                    'matematika' => $request->input("matematika_semester_{$semester}"),
                    'ipa' => $request->input("ipa_semester_{$semester}"),
                    'ppkn' => $request->input("ppkn_semester_{$semester}"),
                ]);
            }

            return redirect()->route('ppdb.daftar')->with('success', 'Data successfully saved.');
        } else {
            return redirect()->back()->with('error', 'User not found.');
        }

    }
}
