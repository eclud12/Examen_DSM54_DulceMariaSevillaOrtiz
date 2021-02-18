<?php
//Modelos parte 2 Danae

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class precio extends Model
{
    //
    public $fillable = [
        'imagen',
        'categoria_id',
        'users_id',
    ];

    public static function validationRules(){
        return[
            'imagen' =>'nullable | min:5 |max:50',
            'categoria'  =>'requeried| min:5 |max:50',
            'users_id'  =>'requeried| min:5 |max:50',
        ];
    }

    Use SoftDeletes;
    protected $table = 'precio';

    public function precio()
    {
        return $this->hasManyThrough('App\Precio', 
        'App\Categoria',
        'App\Users' ,
        'Categoria_id',
        'users_id');
    }

}
