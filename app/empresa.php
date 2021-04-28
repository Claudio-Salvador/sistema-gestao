<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class empresa extends Model
{
    protected $fillabe=['empresaNome','empresaEmail','empresaTelefone','empresaWebsite','empresaDescricao'];

    public function funcionario()
    {
        return $this->hasMany(funcionario::class, 'empresa_id', 'id');
    }
}
