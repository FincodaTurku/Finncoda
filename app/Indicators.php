<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicators extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'indicators';


    public function group()
    {
        $this->belongsTo('App\Indicator_group');
    }
}
