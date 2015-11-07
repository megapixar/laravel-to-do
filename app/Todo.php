<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Ardent validation rules
     */
    public static $rules = array(
        'title' => 'required|255', // Todo tittle
        'isdone' => 'boolean' // Todo tittle
    );

    /**
     * Array used by FactoryMuff to create Test objects
     */
    public static $factory = array(
        'title' => 'string',
        'isdone' => 'boolean', // Will be the id of an existent User.
    );
}
