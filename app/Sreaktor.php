<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sreaktor extends Model
{
    protected $table = 'sreaktor';
    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])
        ->format('d, M Y H:i');
    }
    public function getUpdatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['updated_at'])
        ->diffForHumans();
    }
}
