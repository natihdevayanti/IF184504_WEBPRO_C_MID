<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $fillable = ['pertanyaan','user_id'];
        public function get_users(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function get_jawaban(){
        return $this->hasMany('App\Jawaban');
    }
}
