<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Profissional;

class Tecnologia extends Model
{
    protected $table = 'tec';
    
    public function profissionais(){
        return $this->hasMany('App\Profissional', 'profissionais_tec', 'profissionais_id', 'tec_id');
    }

}
