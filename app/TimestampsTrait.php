<?php

namespace App;

use Illuminate\Support\Facades\Auth;

trait TimestampsTrait
{
    protected static function bootTimestampsTrait()
    {
        static::creating(function ($model) {
            $model->created_by = Auth::id();
        });

        static::updating(function ($model) {
            $model->updated_by = Auth::id();
        });
    }
}
