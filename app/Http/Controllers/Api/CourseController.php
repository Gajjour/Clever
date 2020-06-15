<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\Category_course;

class CourseController extends Controller{
  public function showCategoryCourses(Request $request){
  $id= $request->id;
  $course=Course::all()->where('categoryID','=',$id);
  $category_name=Category_course::all()->where('id','=',$id);
  return response([
    'courses'=>$course
  ]);
  }
  public function showallcourses(){
  $course=Course::all();
  return response([
    'courses'=>$course
  ]);
  }
}
