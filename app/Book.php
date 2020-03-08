<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'books';

     /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    
}
