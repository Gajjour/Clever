@extends('layouts.master')

@section('content')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area blog-page section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="blog-catagories mb-70 d-flex flex-wrap justify-content-between">

                        <!-- Single Catagories -->
                        <!-- {{ $categories ?? '' }} -->
                        @foreach ($categories as $c)
                        <div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc1.jpg);">
                              <a href="/showcourses/{{$c->id}}">
                                <h6>{{ $c->name }}</h6>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>



            <!-- <div class="row">
                <div class="col-12">
                    <div class="load-more text-center mt-100 wow fadeInUp" data-wow-delay="1000ms">
                        <a href="#" class="btn clever-btn btn-2">Load More</a>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @endsection
