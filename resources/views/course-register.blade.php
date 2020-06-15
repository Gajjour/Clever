
@extends('layouts.master')

@section('content')
{{$test}}
{{$name}}
<section class="register-now section-padding-100-0 d-flex justify-content-between align-items-center"
 style="background-image: url(img/core-img/texture.png);">
    <!-- Register Contact Form -->
    <div class="register-contact-form mb-100 wow fadeInUp" data-wow-delay="250ms">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="forms">
                        <h4>Courses For Free</h4>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="course_name"  value="{{$name}}">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn clever-btn w-100">register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Now Countdown -->
    <div class="register-now-countdown mb-100 wow fadeInUp" data-wow-delay="500ms">
        <h3>Register Now</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae. Donec bibendum tortor sed mi faucibus vehicula. Sed erat lorem</p>
        <!-- Register Countdown -->

    </div>
</section>
@endsection
