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

    protected $fillable = ['indicator'];

    public function group()
    {
        $this->belongsTo('App\Indicator_group');
    }
}
