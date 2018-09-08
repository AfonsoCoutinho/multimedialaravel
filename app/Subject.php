<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'type_id',
        'semester',
        'subject',
        'ects',
        'optional',
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
