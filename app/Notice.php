<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable = [
        'type',
        'name',
        'description',
        'started_at',
        'finished_at',
    ];
    protected $dates = [
        'started_at',
        'finished_at',
        'created_at',
        'updated_at',
    ];

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
