<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'description', 'objectives_description', 'careers_description'];

    public function objectives() {
        return $this->hasMany(Objective::class);
    }

    public function careers() {
        return $this->hasMany(Career::class);
    }

    public function contacts() {
        return $this->hasMany(Contact::class);
    }
}
