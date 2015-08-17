<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey_Indicators extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'survey_indicators';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function usedInSurvey()
    {
        return $this->belongsToMany('App\Survey');
    }
}
