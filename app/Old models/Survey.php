<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'surveys';

    public function questions()
    {
        $this->hasMany('questions');
    }
}
