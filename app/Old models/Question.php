<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questions';

    /**
     * The questions that belong to which survey
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function partOfSurvey()
    {
        return $this->belongsToMany('App\Survey');
    }

}

