<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index(){
    	$allCourse = \App\course::all();
        return view('admin/course/courses', compact('allCourse'));
    }

    public function create(){
        $cats = \App\category_course::get();
        return view('admin/course/add', compact('cats') );
    }

    public function store(Request $request){
        $camp = \App\course::create($this->validateItem('create'));
        return redirect('/admin/course/courses');
    }

    public function edit(\App\course $co){
        $cats = \App\category_course::get();
        return view('admin/course/edit', compact(['cats', 'co']) );
    }

    public function update(Request $request, \App\course $co){
        $co->update($this->validateItem('edit'));
        return redirect('/admin/course/courses');
    }

    public function delete(\App\course $co){
        $cou = \App\course::where('id',$co->id)->delete();
        $allCourse = \App\course::all();
        return view('admin/course/courses', compact('allCourse'));
    }

    protected function validateItem($form_name) {
        $str = ($form_name == 'create') ? 'required|' : 'sometimes|nullable|';

        $res = request()->validate([
            'name' => 'required',
            'categoryID' => 'required',
            'file' => $str . 'image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required',
            'duration' => 'required']);

        if(request()->hasFile('file')) {
            $imageName = time() . '.' . request()->file->getClientOriginalExtension();
            request()->file->move(public_path('uploads/course'), $imageName);
            $res['image'] = $imageName;
        }
        unset($res['file']);

        return $res;
    }

    public function showPopularCourses(){
      $course=\App\course::all()->sortBy('created_at')->take(3);
      return view('index',['c'=>$course]);
    }

    public function showCategoryCourses(Request $request){
      $id = $request->id;
      $course = \App\course::all()->where('categoryID','=',$id);
      $category_name = \App\Category_course::all()->where('id','=',$id);
      return view('courses',['courses'=>$course,'test'=>$category_name[intval($id)-1]['name']]);
    }

    public function showSingleCourse(Request $request, \App\Course $id){
       if (Auth::check()) { 
        $sco = \App\course_student::all()->where('courseID','=',$id,'AND','userID','=',$request->user()->id);
        return view('single-course', ['course' => $id, 'sco' => $sco]);
      }else {
        return view('single-course', ['course' => $id]);
      }
    }

    public function courseregister(Request $request, \App\Course $id){
      $res = request()->validate([
            'courseID' => 'required',
            'userID' => 'required']);
      $camp = \App\course_student::create($res);
      $sco = \App\course_student::where('courseID', $id)->where('userID', $request->user()->id)->get();
      dd($sco);
      return view('single-course', ['course' => $id, 'sco' => $sco]);
    }
}
