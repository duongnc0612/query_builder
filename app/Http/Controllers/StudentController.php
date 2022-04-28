<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function getStudent()
    { 	
    	$students = DB::table('students')->orderBy('id','desc')->get();

 
        return view('students.index', ['students' => $students]);
    }

    public function createStudent()
    {
    	return view('students.create');
    }

    public function store(Request $request)
    {
    	$name = $request->input('name');  
    	$birthday = $request->input('birthday');  

    	DB::table('students')->insert([
    		'name' => $name,
    		'birthday' => $birthday,
    		'created_at' => date('Y-m-d H:i:s'),
    		'updated_at' => date('Y-m-d H:i:s')
    		
    	]);

    	return redirect()->route('students.index');



    }

    public function destroy($id)
    {
    	DB::table('students')->where('id', '=', "{$id}")->delete();

    	return redirect()->route('students.index');
    }

    public function edit($id)
    {
        $student =  DB::table('students')->where('id', "{$id}")->first();
        if (!$student) {
            abort(404);
        }
        return view('students.edit', ['student' => $student]);

    }


    public function update($id ,Request $request){
        $name = $request->input('name');  
        $birthday = $request->input('birthday');

        DB::table('students')->where('id', "{$id}")->update([
            'name' => $name,
            'birthday' => $birthday,
            'updated_at' => date('Y-m-d H:i:s')

        ]);

        return redirect()->route('students.index');

    }
}
