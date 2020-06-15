@extends('layouts.master')

@section('content')
<!-- ##### Contact Area Start ##### -->
<section class="contact-area">
    <div class="container">
        <div class="row">
            <!-- Contact Info -->
            <div class="col-12 col-lg-6">
                <div class="contact--info mt-50 mb-100">
                    <h4>Contact Info</h4>
                    <ul class="contact-list">
                        <li>
                            <h6><i class="fa fa-clock-o" aria-hidden="true"></i> Business Hours</h6>
                            <h6>9:00 AM - 18:00 PM</h6>
                        </li>
                        <li>
                            <h6><i class="fa fa-phone" aria-hidden="true"></i> Number</h6>
                            <h6>+44 300 303 0266</h6>
                        </li>
                        <li>
                            <h6><i class="fa fa-envelope" aria-hidden="true"></i> Email</h6>
                            <h6>info@clever.com</h6>
                        </li>
                        <li>
                            <h6><i class="fa fa-map-pin" aria-hidden="true"></i> Address</h6>
                            <h6>10 Suffolk st Soho, London, UK</h6>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-12 col-lg-6">
                <div class="contact-form">
                    <h4>Get In Touch</h4>
                    <form action="/message" method="post" >
                    @csrf
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-solid-danger alert-bold" role="alert">
                                <div class="alert-text">{{ $error }}</div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="text" placeholder="Name" name="name" value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message" name="message">
                                    {{ old('message') }}
                                </textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn clever-btn w-100">Send Message</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->

@endsection


<!-- Google Maps -->
