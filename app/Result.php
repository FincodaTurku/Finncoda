<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{

    public function survey()
    {
        return $this->belongsTo(Survey::class, 'survey_id');
    }
}
