<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    public function options()
    {
        return $this->belongsToMany(Optional::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
