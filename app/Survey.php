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


    protected $fillable = [
        'owner_id',
        'title',

    ];

    /**
     * A survey has many questions
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function type()
    {
        return $this->belongsTo('App\Survey_Type');
    }

    public function questions()
    {
        return $this->belongsToMany('App\Indicator', 'survey_indicators');
    }

    /**
     *Each survey has a creator or owner
     */
    public function owner()
    {
        return $this->belongsTo('App\User');
    }
}
