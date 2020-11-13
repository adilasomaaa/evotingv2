<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Siswa, User};
use Hash;
use Alert;
use App\Imports\VotersImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Crypt;

class SiswaController extends Controller
{
    public function index()
    {
        $title = 'List Siswa';
        $data = Siswa::orderBy('id','asc')->get();

        return view('siswa.index',compact('title','data'));
    }
    public function add()
    {
        $title = 'Tambah Siswa';

        return view('siswa.add', compact('title'));
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $email  = $request->email;
        $kelas = $request->kelas;
        $password = Hash::make($request->password);
  
        $data = new User;
        $data->name  = $name;
        $data->email  = $email;
        $data->password  = $password;
        $data->save();

        $usr = new Siswa;
        $usr->user_id = $data->id;
        $usr->nama = $name;
        $usr->kelas = $kelas;
        $usr->email = $email;
        $usr->password = $password;
        $usr->save();

        Alert::success('Sukses','Pilihan anda  berhasil diinput');
        return redirect('siswa');
    }

    public function edit($id)
    {
        $title = 'Tambah Siswa';
        $dt = Siswa::find($id);
        $data = User::find($id);
        
        return view('siswa.edit', compact('title','dt','data'));
    }

    public function update(request $request , $id)
    {
       
        $name = $request->name;
        // $email  = $request->email;
        $kelas = $request->kelas;
        $password = bcrypt($request->password);
        dd($id);
  
        $data = User::find($id);
        // $data->name = $name;
        // $data->email = $email;
        $data->password = $password;
        $data->update();

        $usr = Siswa::find($id);
        $usr->user_id = $data->id;
        $usr->nama = $name;
        $usr->kelas = $kelas;
        // $usr->email = $email;
        $usr->password = $password;
        $usr->update();

        // $user = User::create([
        //     'name' => $request->input('name'),
        //     'email' => $request->input('email'),
        //     'password' => Hash::make($request->input('password')),

        // ]);
        

        Alert::success('Sukses','Data berhasil diubah');
        return  redirect('siswa');

    }

    public function import(Request $request)
    {
        Excel::import(new VotersImport,request()->file('importVoters'));
        return back();
        // Excel::import(new \App\Imports\TeachersImport, $request->file('importTeachers'))->getPathName();
    }

    public function generateAkun()
    {
        User::truncate();
           
        $user = new User;
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('lks2020');
        $user->save();
        
        $data = Siswa::all();
        foreach ($data as $d){
            
            $user = new User;
            $user->name = $d->nama;
            $user->email = $d->email;
            $user->password = bcrypt($d->password);
            $user->save();
        }
        return back();
    }

}
