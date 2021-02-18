<?php
//Modelos parte 2 Danae

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cliente extends Model
{
    //
    public $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'status',
        'tipo',
    ];

    public static function validationRules(){
        return[
            'nombre'  =>'requeried| min:5 |max:50',
            'direccion'  =>'requeried| min:5 |max:50',
            'telefono'  =>'requeried| min:5 |max:50',
            'status'  =>'requeried| min:5 |max:50',
            'tipo'  =>'requeried| min:5 |max:50',
        ];
    }

    Use SoftDeletes;
    protected $table = 'cliente';

    public function cliente()
    {
        return $this->hasOne(cliente::class);
    }

}
