<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','duration_hours','level','image_url'];

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'course_user','course_id','user_id');
    }
}
