<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'type_id',
        'name',
        'description',
        'started_at',
    ];
    protected $dates = [
        'started_at',
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
