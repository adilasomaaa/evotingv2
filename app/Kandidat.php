<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    protected $guarded = [];
   public function voting()
   {
       return $this->hasMany(Voting::class);
   }
}
