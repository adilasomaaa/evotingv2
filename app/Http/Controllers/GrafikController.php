<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voting;
use App\Siswa;
use App\Kandidat;

class GrafikController extends Controller
{
    public function index()
    {
        $title = 'Hasil Polling';
        $hasil = [];
      
        $kandidat = Kandidat::with('voting')->get();
        $total_suara = [];
        
        $total_pemilih = Siswa::count();
        $hak_pemilih = Voting::count();

        // foreach($kandidat as $key => $k) {
        //     $jumlah = $k->id;
        //     $no_urut = $k->no_urut;
        //     $data = Voting::where('kandidat_id', $jumlah)->count();
            
        //     array_push($total_suara, $data);
           
        // }
        
        
        foreach($kandidat as $key => $kd) {
            $id_kandidat = $kd->id;
            $no_urut = $kd->no_urut;
            $total = Voting::where('kandidat_id', $id_kandidat)->count();
            

            $a['name'] = $no_urut;
            $a['y'] = $total;
            array_push($hasil, $a);
        }

        return view('grafik.index', compact('title','hasil','data','kandidat','total','total_pemilih','hak_pemilih','total_suara'));
    }
}
