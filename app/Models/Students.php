<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Students
 * @package App\Models
 * @version November 22, 2021, 8:05 am UTC
 *
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $birthdate
 * @property string $gender
 * @property string $address
 * @property string $citizenship
 * @property string $religion
 */
class Students extends Model
{
   // use SoftDeletes;

    use HasFactory;

    public $table = 'students';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'birthdate',
        'gender',
        'address',
        'citizenship',
        'religion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'firstname' => 'string',
        'middlename' => 'string',
        'lastname' => 'string',
        'birthdate' => 'date',
        'gender' => 'string',
        'address' => 'string',
        'citizenship' => 'string',
        'religion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'firstname' => 'nullable|string|max:60',
        'middlename' => 'nullable|string|max:60',
        'lastname' => 'nullable|string|max:60',
        'birthdate' => 'nullable',
        'gender' => 'nullable|string|max:12',
        'address' => 'nullable|string|max:500',
        'citizenship' => 'nullable|string|max:50',
        'religion' => 'nullable|string|max:50',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
