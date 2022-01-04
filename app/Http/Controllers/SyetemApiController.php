<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Library;
use App\Models\Dorm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SyetemApiController extends Controller
{
    public function get_student()
    {
        return Student::with('Libraries','Dorms')->get();


    }
    public function get_library()
    {
        return Library::with('Studenties')->get();

    }
    public function in_library($id)
    {
        $s=Library::where('student_id',$id)->first();
        if($s)
            return  'نا ازاية';
        else
            return 'ازية';

    }
    public function get_dorms()
    {
        return Dorm::with('Studenties')->get();

    }

    public function  testrequest (){

        $re = Http::get('http://127.0.0.1:8000/api/library');
        print ($re);
    }
}
