<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function messages(){
    	$messages = \App\contact::all();
        return view('admin/mailbox/messages', compact('messages') );
    }
    public function delete(\App\contact $con){
        $cou = \App\contact::where('id',$con->id)->delete();
        $allCourse = \App\course::all();
        return view('admin/course/courses', compact('allCourse'));
    }

    public function store(Request $request){
        $msg = \App\contact::create($this->validateItem('create'));
        return view('/contact');
    }

    protected function validateItem($form_name) {
        $str = ($form_name == 'create') ? 'required|' : 'sometimes|nullable|';

        $res = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        return $res;
    }
}
