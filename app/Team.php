<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function subjects(){

        return $this->belongsToMany('App\Subject');
     }
     public function users(){
        return $this->hasMany('App\User');
     }
     public function teachers(){
      return $this->belongsToMany('App\Teacher','teachers_team','team_id','teacher_id');
   }
}
