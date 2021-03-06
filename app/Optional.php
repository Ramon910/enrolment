<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Optional extends Model
{
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function studies()
    {
        return $this->belongsToMany(Study::class);
    }
}
