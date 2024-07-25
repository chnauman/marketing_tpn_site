@extends('frontend.layouts.main_layout')
@section('content')
    <!-- Small Banner -->
    <section class="small-banner">
        <div class="container">
            <div class="sm-bannner-wrap contact-banner">
                <div class="sm-banner-content">
                    <h1>Contact Us</h1>
                    <span></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Email -->
    <section class="email">
        <div class="container">
            <div class="email-block">
                <img src="{{ asset('images/email.svg') }}" width="326px" alt="Email Icon" class="img-fluid">
                <div>
                    <h5>Email</h5>
                    <p>Want to get in touch with us?</p>
                </div>
                <div>
                    <p>Just send an email to</p>
                    <h4>support@theprintnation.com</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Want a custom solution? -->
    <section class="custom-solution">
        <div class="container">
            <div class="solution-wrapper">
                <div>
                    <h2>Have any Questions About The Print Nation?</h2>
                    <p class="text-white">Then get it right now!</p>
                </div>
                <div class="common-btns m-0">
                    <a href="javascript:void(0)"><p>Contact Us</p></a>
                </div>
            </div>
        </div>
    </section>
@endsection
