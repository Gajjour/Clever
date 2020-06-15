<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contentController extends Controller
{
    public function curriculum(\App\course $con){
        return view('admin/curriculums/curriculum', compact('con') );
    }

    public function create(\App\course $co){
        return view('admin/curriculums/add', compact('co'));
    }

    public function store(Request $request){
        $con = \App\content::create($this->validateItem('create'));
        return redirect('admin/course/courses');
    }

    public function edit(\App\content $con){
        return view('admin/curriculums/edit', compact('con') );
    }

    public function update(Request $request, \App\content $con)
    {
        $con->update($this->validateItem('edit'));
        return redirect('admin/course/courses');
    }

    public function delete(\App\content $con){
        $cou = \App\content::where('id',$con->id)->delete();
        $allCourse = \App\course::all();
        return view('admin/course/courses', compact('allCourse'));
    }

    protected function validateItem($form_name) {
        $str = ($form_name == 'create') ? 'required|' : 'sometimes|nullable|';

        $res = request()->validate([
            'title' => 'required',
            'link' => 'required',
            'courseID' => 'required'
        ]);

        return $res;
    }
}
