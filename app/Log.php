<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $guarded = [''];

    public function scopeStatusQueue($query) {
        return $query->where('status', 0);
    }

    public function scopeStatusDone($query) {
        return $query->where('status', 1);
    }

}
