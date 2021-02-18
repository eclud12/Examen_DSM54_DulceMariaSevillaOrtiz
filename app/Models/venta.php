<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class venta extends Model
{
    //
    public $fillable = [
        'id',
        'producto_id',
        'nombre',
        'cliente_id',
        'total',
    ];

    public static function validationRules()
    {
        return [
            'id' => 'nullable | min:5 |max:50',
            'producto_id' => 'nullable | min:5 |max:50',
            'nombre' => 'requeried | min:5 |max:50',
            'cliente_id' => 'nullable | min:5 |max:50',
            'total' => 'requeried| min:5 |max:50',
        ];
    }

    use SoftDeletes;
    protected $table = 'venta';

    public function venta()
    {
        return $this->hasManyThrough(
            'App\Producto',
            'App\cliente',
            'producto_id',
            'cliente_id',
        );
    }
}
