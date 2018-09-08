<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = ['description'];

    protected static function boot() {
        parent::boot();

        self::creating(function (Model $model) {
            $model->course_id = 1;
        });
    }

    public function course() {
        return $this->belongsTo(Course::class);
    }
}
