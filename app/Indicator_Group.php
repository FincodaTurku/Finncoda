<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicator_Group extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'indicator_groups';

    protected $fillable = ['name'];

    public function questions()
    {
        return $this->hasMany('App\Indicator', 'group_id');
    }

    public function question($question)
    {

        return $this->questions()->where('id', '=', $question);
    }

}
