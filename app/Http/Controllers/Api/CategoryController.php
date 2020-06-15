<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category_course;

class CategoryController extends Controller
{
public function show(){
  $categories=Category_course::all();

  return response([
    'categories'=>$categories
  ]);
}
}
