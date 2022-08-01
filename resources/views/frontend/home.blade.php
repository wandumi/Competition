@extends('frontend.layouts.app')

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/gym-video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>work harder, get stronger</h6>
                <h2>easy with our <em>gym</em></h2>
                <div class="main-button scroll-to-section">
                    <a href="#features">Become a member</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 ">
                    <div class="section-heading">
                        <h2>Choose <em>Program</em></h2>
                        <img src="{{ asset('frontend/images/line-dec.png') }}" alt="waves">
                        <p>Training Studio is free CSS template for gyms and fitness centers. You are allowed to use this layout for your business website.</p>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-3 mb-5">
                    @if($message =  session('message'))
                        <div class="alert alert-success">{{ $message }}</div>
                    @endif
                    <form id="contact" action="{{ url('admin/submissions') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="full_name">Full name</label>
                                <input name="full_name" type="text"  class="form-control @error('full_name') is-invalid @enderror"
                                       id="fullname" placeholder="Your Full Name*" value="{{ old('full_name') }}">
                                @error('full_name')
                                <div class="invalid-feedback"> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="fullname">Email Address</label>
                                <input name="email" type="text" value="{{ old('email') }}"  class="form-control @error('email') is-invalid @enderror" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" >
                                @error('email')
                                    <div class="invalid-feedback"> {{ $message }}</div>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="mobile">Mobile Number</label>
                                <input name="mobile" type="number" value="{{ old('mobile') }}" class="form-control @error('mobile') is-invalid @enderror" id="subject" placeholder="Mobile Number">
                                @error('mobile')
                                    <div class="invalid-feedback"> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="slip">Upload Slip</label>
                                <input type="file" value="{{ old('slip') }}" class="form-control @error('slip') is-invalid @enderror" name="slip" id="slip">
                                @error('slip')
                                    <div class="invalid-feedback"> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12">

                            <button type="submit" id="form-submit" class="btn btn-primary btn-block">Send Message</button>

                        </div>

                    </form>

            </div>

        </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->
@endsection

