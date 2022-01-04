<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dorm extends Model
{
    protected $table='dorms';
    protected $fillable = ['id_code','student_id','created_at','updated_at'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function Studenties()
    {
        return $this->belongsTo('App\Models\Student','student_id','id_code');
    }
}
