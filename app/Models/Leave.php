<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
    protected $fillable = ['student_id', 'teacher_id', 'classes_id', 'reason', 'type', 'leave_date', 'review_date', 'result'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function classes()
    {
        return $this->belongsTo(Classes::class);
    }
}
