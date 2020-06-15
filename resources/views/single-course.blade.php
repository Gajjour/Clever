

@extends('layouts.master')

@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area">
    <!-- Breadcumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/blog">Courses</a></li>
            <li class="breadcrumb-item"><a href="/showcourses/{{ $course->category->categoryID }}">{{ $course->category->name }}</a></li>
            <li class="breadcrumb-item active" aria-current="page"></li>
        </ol>
    </nav>
</div>
<!-- ##### Breadcumb Area End ##### -->
<!-- ##### Single Course Intro Start ##### -->
<div class="single-course-intro d-flex align-items-center justify-content-center" style=
"background-image: url({{ url('/uploads/course/' . $course->image) }});">
    <!-- Content -->
    <div class="single-course-intro-content text-center">
        <!-- Ratings -->
        <h3>{{ $course->name }}</h3>
        <div class="meta d-flex align-items-center justify-content-center">
             <span><i class="fa fa-circle" aria-hidden="true"></i></span>
            <a href="/showcourses/{{ $course->categoryID }}">{{ $course->category->name }}</a>
        </div>
        <div class="price">Free</div>
    </div>
</div>

<!-- ##### Single Course Intro End ##### -->

<!-- ##### Courses Content Start ##### -->
<div class="single-course-content section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="course--content">
                    <div class="clever-tabs-content">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab--1" data-toggle="tab"
                                 href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab"
                                 aria-controls="tab2" aria-selected="true">Curriculum</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <!-- Tab Text -->
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                <div class="clever-description">
                                    <!-- About Course -->
                                    <div class="about-course mb-30">
                                        <h4>About this course</h4>
                                        <p>{{ $course->description }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Text -->
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                <div class="clever-curriculum">
                                    <!-- Curriculum Level -->
                                    <div class="curriculum-level mb-30">
                                        <h3>Syllabus</h3><br>
                                        <ul class="curriculum-list">
                                            @foreach($course->contents as $con)
                                            <li>
                                            <span><i class="fa fa-video-camera" aria-hidden="true"></i> Video: 
                                                <span>
                                                <a href="{{$con->link}}" >{{$con->title}}</a>
                                                </span>
                                            </span>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="course-sidebar">
                    @guest
                        <a href="#" class="btn clever-btn mb-30 w-100">Login To register in the course</a>
                    @endguest
                    @auth
                    @if($sco == null)
                        <a href="#" class="btn clever-btn mb-30 w-100">You are registered in this course</a>
                    @else
                        <form action="/single_course/{{ $course->id }}" method="post">
                            @csrf
                            <input type="hidden" name="courseID" value="{{$course->id}}">
                            <input type="hidden" name="userID" value="{{auth::user()->id}}">
                          <button type="submit" class="btn clever-btn mb-30 w-100">
                              register in the course
                          </button>
                        </form>
                    @endif
                    @endauth
                    <!-- Widget -->
                    <div class="sidebar-widget">
                        <h4>Course Features</h4>
                        <ul class="features-list">
                            <li>
                                <h6><i class="fa fa-clock-o" aria-hidden="true"></i> Duration</h6>
                                <h6>{{ $course->duration }}</h6>
                            </li>
                            <!-- <li>
                                <h6><i class="fa fa-bell" aria-hidden="true"></i> Lectures</h6>
                                <h6>10</h6>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Courses Content End ##### -->

<!-- ##### Footer Area Start ##### -->
@endsection
