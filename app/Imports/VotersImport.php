<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Siswa;

class VotersImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        Siswa::truncate();
        foreach ($collection as $key => $col) {
            if ($key >= 4) {
                Siswa::create([
                    'email'=>$col[1],
                    'nama'=>$col[2],
                    'kelas'=>$col[3],
                    'password'=>$col[4],
                ]);
            }
        }
    }
}
