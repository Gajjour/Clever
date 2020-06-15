<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category_course;
class CategoryController extends Controller
{
    public function show(){

      $categories=Category_course::all();

      return view('admin.course-add', ['categories' => $categories,'test'=>'rrrrrrrr']);

    }
    public function show2(){

      $categories=Category_course::all();
       
      return view('blog', ['categories' => $categories,'test'=>'rrrrrrrr']);

    }
}
