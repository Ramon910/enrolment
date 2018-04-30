<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function paretns()
    {
        return $this->hasMany(Parent::class);
    }

    public function study()
    {
        return $this->belongsTo(Study::class);
    }

    public function options()
    {
        $this->belongsToMany(Optional::class);
    }
}
