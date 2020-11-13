<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voting extends Model
{
    protected $guarded = [];
    protected $fillable = ['kandidat_id','user_id'];
    public function kandidat()
    {
        return $this->belongsTo('App\Kandidat','kandidat_id','id');
    }
}
