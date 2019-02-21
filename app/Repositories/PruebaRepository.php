<?php

namespace App\Repositories;

use App\Models\Prueba;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PruebaRepository
 * @package App\Repositories
 * @version February 19, 2019, 1:48 pm UTC
 *
 * @method Prueba findWithoutFail($id, $columns = ['*'])
 * @method Prueba find($id, $columns = ['*'])
 * @method Prueba first($columns = ['*'])
*/
class PruebaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'email',
        'clave'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Prueba::class;
    }
}
