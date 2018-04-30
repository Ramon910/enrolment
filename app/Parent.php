<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parent extends Model
{
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
