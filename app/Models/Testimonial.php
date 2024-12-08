<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','testimonial','course_id','rating'];

    protected function user()
    {
        return $this->belongsTo(User::class);
    }

    protected function course()
    {
        return $this->belongsTo(Course::class);
    }
}
