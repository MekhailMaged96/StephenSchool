<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table="subjects";

     public function teams(){

        return $this->belongsToMany('App\Team');
     }
     public function users(){

      return $this->belongsToMany('App\Subject','subject_user','subject_id','user_id')->withPivot('grade');
   }
}
