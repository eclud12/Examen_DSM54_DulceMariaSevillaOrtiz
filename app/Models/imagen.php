<?php
//Modelos parte 2 Danae

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class imagen extends Model
{
    //
    public $fillable = [
        'id',
        'categoria_id',
        'users_id',
        'cliente_id',
        'venta_id',

    ];

    public static function validationRules(){
        return[
            'id' =>'nullable | min:5 |max:50',
            'categoria_id' =>'nullable | min:5 |max:50',
            'users_id' =>'nullable | min:5 |max:50',
            'cliente_id' =>'nullable | min:5 |max:50',
            'venta_id' =>'nullable | min:5 |max:50',
        ];
    }

    Use SoftDeletes;
    protected $table = 'venta';

    public function venta()
    {
        return $this->hasManyThrough('App\categoria',
        'App\users',
        'App\cliente',
        'App\venta',
        'categoria_id',
        'users_id',
        'cliente_id',
        'venta_id',);
    }

}
