<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
class Library extends Model
{

    protected $table='library';
    protected $fillable = ['id_code','book_names','student_id','created_at','updated_at',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function Studenties()
    {
        return $this->belongsTo('App\Models\Student','student_id','id_code');
    }
}
