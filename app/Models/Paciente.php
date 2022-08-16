<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paciente
 *
 * @property $id
 * @property $Identificacion
 * @property $nombres
 * @property $apellidos
 * @property $edad
 * @property $genero
 * @property $EPS
 * @property $TP
 * @property $PTT
 * @property $III
 * @property $AT_III
 * @property $TT
 * @property $Fibrinogeno
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paciente extends Model
{
    
    static $rules = [
		'Identificacion' => 'required',
		'nombres' => 'required',
		'apellidos' => 'required',
		'edad' => 'required',
		'genero' => 'required',
		'EPS' => 'required',
		'TP' => 'required',
		'PTT' => 'required',
		'III' => 'required',
		'AT_III' => 'required',
		'TT' => 'required',
		'Fibrinogeno' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Identificacion','nombres','apellidos','edad','genero','EPS','TP','PTT','III','AT_III','TT','Fibrinogeno'];



}
