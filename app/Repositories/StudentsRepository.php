<?php

namespace App\Repositories;

use App\Models\Students;
use App\Repositories\BaseRepository;

/**
 * Class StudentsRepository
 * @package App\Repositories
 * @version November 22, 2021, 8:05 am UTC
*/

class StudentsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Students::class;
    }
}
