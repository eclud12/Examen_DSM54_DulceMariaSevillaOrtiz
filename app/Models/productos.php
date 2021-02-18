<?php
//Modelos parte 2 Danae

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class productos extends Model
{
    //
    public $fillable = [
        'nombre',
        'cantidad',
        'descripcion',
    ];

    public static function validationRules(){
        return[
            'nombre' =>'nullable | min:5 |max:50',
            'cantidad'  =>'requeried| min:5 |max:50',
            'descripcion'  =>'requeried| min:5 |max:50',
        ];
    }

    Use SoftDeletes;
    protected $table = 'productos';

    public function productos()
    {
        return $this->hasOne(productos::class);
    }

}
