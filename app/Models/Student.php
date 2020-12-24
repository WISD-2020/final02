<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    public function takes()
    {
        return $this->hasMany(Take::class);
    }

    public function attends()
    {
        return $this->hasMany(Attend::class);
    }

    public function leaves()
    {
        return $this->hasMany(Leave::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
