<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'indicators';

    protected $fillable = ['indicator', 'group_id'];

    public function group()
    {
        return $this->belongsTo('App\Indicator_group');
    }

    public function survey()
    {
        return $this->hasMany('App\Survey');
    }
}
