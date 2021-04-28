<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funcionario extends Model
{
    protected $table='funcionarios';
    protected $fillable=['funcionarioNome', 'funcionarioEmail', 'funcionarioIduser', 'funcionarioTelefone', 'funcionarioNaturalidade'];

    public function empresaR(){
        return $this->belongsTo(empresa::class,'empresa_id','id');
    }
}
