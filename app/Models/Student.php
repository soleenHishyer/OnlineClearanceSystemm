<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='student';
    protected $fillable = ['id_code','name','faculty','department','stage','email',
        'password','phone_number','created_at','updated_at',
    ];
    protected $hidden = [
        'password',
        'created_at',
        'updated_at',
    ];

    public function Libraries()
    {
        return $this->hasMany('App\Models\Library','student_id','id_code');
    }
    public function Dorms()
    {
        return $this->hasMany('App\Models\Dorm','student_id','id_code');
    }
}
