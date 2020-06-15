@extends('layouts.master')

@section('content')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->

    <!-- {{ $courses ?? '' }} -->


    <div class="breadcumb-area">
        <!-- Breadcumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/blog">Courses</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $test ?? '' }}</li>
            </ol>
        </nav>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Catagory ##### -->
    <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url({{ url('/') }}/img/bg-img/bg2.jpg);">
        <h3>{{ $test ?? '' }}</h3>
    </div>

    <!-- ##### Popular Course Area Start ##### -->
    <section class="popular-courses-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Single Popular Course -->

                @foreach ($courses as $course)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="{{url('/uploads/course/' . $course->image)}}" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <a href="/single_course/{{$course->id}}"><h4>{{ $course->name }}</h4></a>
                            <div class="meta d-flex align-items-center">

                                <li aria-current="page">{{ $test ?? '' }}</li>
                            </div>
                            <p>{{ $course->description }}</p>
                        </div>
                        <!-- Seat Rating Fee -->

                    </div>
                </div>

                <!-- Single Popular Course -->
                 @endforeach
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="load-more text-center wow fadeInUp" data-wow-delay="1000ms">
                        <a href="#" class="btn clever-btn btn-2">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Popular Course Area End ##### -->

        @endsection
