<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Prueba
 * @package App\Models
 * @version February 19, 2019, 1:48 pm UTC
 *
 * @property string nombre
 * @property string email
 * @property string clave
 */
class Prueba extends Model
{
    use SoftDeletes;

    public $table = 'pruebas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'email',
        'clave'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'email' => 'string',
        'clave' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'email' => 'email',
        'clave' => 'required'
    ];

    
}
