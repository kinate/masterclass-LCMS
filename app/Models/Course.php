<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function curriculum(){
        return $this->hasMany(Curriculum::class);
    }

    public function instructors()
    {
        return $this->belongsToMany(Instructor::class);
    }

}
