@extends('layouts.master')

@section('content')


    <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(img/bg-img/bg1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <h2>Let's Study Together</h2>
                        <a href="/blog" class="btn clever-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->
    <!-- @if(isset(Auth :: user()->name))
    <div>
    welcome {{Auth::user()->name }}
    </div>
    @endif -->
    <!-- ##### Popular Courses Start ##### -->
    <!-- {{ $test ?? '' }}
    {{ $c ?? '' }} -->
    <section class="popular-courses-area section-padding-100-0" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Popular Online Courses</h3>
                    </div>
                </div>
            </div>

            <div class="row">

                 @foreach ($c as $course)

                 <div class="col-12 col-md-6 col-lg-4">
                     <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                         <img src="{{url('/uploads/course/' . $course->image)}}" alt="">
                         <!-- Course Content -->
                         <div class="course-content">
                             <h4>{{ $course->name }}</h4>
                             <div class="meta d-flex align-items-center">
                                 <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                 <a href="/showcourses/{{ $course->categoryID }}">{{ $course->category->name }}</a>
                             </div>
                             <p>{{ $course->description }}</p>
                         </div>
                         <!-- Seat Rating Fee -->

                     </div>
                 </div>

                @endforeach

            </div>
        </div>
    </section>
    <!-- ##### Popular Courses End ##### -->

    <!-- ##### Register Now Start ##### -->
    
    <!-- ##### Register Now End ##### -->
@endsection
