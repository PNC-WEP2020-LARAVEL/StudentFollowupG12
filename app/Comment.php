<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Student;
class Comment extends Model
{
    protected $fillable = [
        'comment','user_id'
    ];
    public function user(){
        return $this->belongsToMany(User::class);
    }
    public function students(){
        return $this->belongsToMany(Student::class);
    }
}
