<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $fillable = ['jawaban','user_id','pertanyaan_id'];
     public function get_users(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function get_pertanyaan(){
        return $this->belongsTo('App\Pertanyaan', 'pertanyaan_id', 'id');
    }
}
