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
    protected $table = 'question';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function vote()
    {
        return $this->hasMany('App\Vote');
    }
}
