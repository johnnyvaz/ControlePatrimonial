<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patrimonio extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'patrimonios';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descricao', 'estado', 'valor', 'quantidade', 'total', 'dataAquisicao', 'observacao', 'foto'];

    
}
