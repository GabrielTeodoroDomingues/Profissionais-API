<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $table = 'profissionais';
    public function tec(){
        return $this->hasMany('App\Tecnologia', 'profissionais-tec', 'profissionais_id', 'tec_id');
    }
}
