<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function parentts()
    {
        return $this->hasMany(Parentt::class);
    }

    public function study()
    {
        return $this->belongsTo(Study::class);
    }

    public function optionals()
    {
        return $this->belongsToMany(Optional::class);
    }
}
