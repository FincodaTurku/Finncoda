<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey_Type extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'survey_types';

    public function surveys()
    {
        return $this->hasMany('App\Survey', 'type_id');
    }
}
