<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class empresaModel extends Model
{
    protected $table='empresas';

    protected $fillable = [
        'empresa', 'descricao', 'email', 'localidade',
    ];


    public function setEmpresaAttribute($value){

            $this->attributes['empresa']=$value;
            $this->attributes['slug']=Str::slug($value);
    }
}
