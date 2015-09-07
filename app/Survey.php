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
        'scale',
        'description',
        'welcome_message',
        'end_message',
        'start_time',
        'end_time'
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

    public function groups()
    {
        return $this->hasManyThrough('App\Indicator_Group', 'App\Indicator', 'group_id' );
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
