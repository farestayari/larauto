<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    protected $fillable  = ['nom','prenom','adress','cin','nationalité','categorie','telephone','type','date_naissance','user_id'];


    public function user(){
      return $this->belongsToMany('\App\User');
    }

}
