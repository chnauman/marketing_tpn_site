@extends('frontend.layouts.main_layout')

@section('content')
    <!-- Banner -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-content">
                        <h1>Design and Sell Custom Products.</h1>
                        <ul>
                            <li><img src="{{ asset('images/check-orange.svg') }}" alt="Check" class="img-fluid"><p>Absolutely Free of Cost</p></li>
                            <li><img src="{{ asset('images/check-orange.svg') }}" alt="Check" class="img-fluid"><p>300+ Top-Notch Products</p></li>
                            <li><img src="{{ asset('images/check-orange.svg') }}" alt="Check" class="img-fluid"><p>Extensive National Print Network</p></li>
                        </ul>
                        <div class="common-btns">
                            <a href="javascript:void(0)"><p>Start Designing</p></a>
                            <a href="javascript:void(0)"><span class="play-btn"><img src="{{ asset('images/play.svg') }}" alt="Play Button" class="img-fluid"></span><p>How it works?</p></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/banner-img.svg') }}" alt="Banner Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section class="benefits">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-benefit">
                        <img src="{{ asset('images/benefit-img1.svg') }}" alt="Benefot Icon" class="img-fluid">
                        <h4>Maximize Profits</h4>
                        <p>Get some of the lowest prices in the industry from print providers who constantly compete to win your business.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-benefit">
                        <img src="{{ asset('images/benefit-img2.svg') }}" alt="Benefot Icon" class="img-fluid">
                        <h4>Flexible Scaling</h4>
                        <p>Easily manage the holiday seasons with our vast network of partners and flexible routing functionality.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-benefit">
                        <img src="{{ asset('images/benefit-img3.svg') }}" alt="Benefot Icon" class="img-fluid">
                        <h4>Best Selection</h4>
                        <p>Choose the best products for your business from premium brands and
                            300 + collections.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- One design, Infinite Products -->
    <section class="one-design">
        <div class="container">
            <div class="row">
                <div class="col-md-6 position-relative">
                    <div class="absolute-content">
                        <h3>One Design, Infinite Products.</h3>
                        <p>Create your niche of products with a custom design.  With our user-friendly design tools, you can add a design to any product and make it your own.</p>
                        <div class="common-btns">
                            <a href="javascript:void(0)"><p>All Products</p><img src="{{ asset('images/arrow-right.svg') }}" alt="Arrow Right" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/one-design-img.svg') }}" alt="One Design Image" class="img-fluid">
                </div>
            </div>
            <div class="row mt-5 pt-5">
                <div class="col-md-4">
                    <div class="three-points">
                        <h5><b>Create</b> your Products</h5>
                        <p>Add a design to any product and make it your own using our free tools</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="three-points">
                        <h5><b>Sell</b> it the Way you want</h5>
                        <p>You decide everything - the product, sale price, including where you sell them.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="three-points">
                        <h5><b>We Handle</b> the Logistics</h5>
                        <p>Once an order is placed, we take care of the rest - from print to delivery.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Link your online store -->
    <section class="link-store">
        <div class="container">
            <h2>Link your <b>Online Store.</b></h2>
            <p>Your TPN (The Print Nation) account can be easily linked with major e-commerce platforms and marketplaces.</p>
            <img src="{{ asset('images/link-online.svg') }}" alt="Link Online Images" class="img-fluid">
        </div>
    </section>

    <!-- Want a custom solution? -->
    <section class="custom-solution">
        <div class="container">
            <div class="solution-wrapper">
                <h2>Want a Custom Solution to Expand your Business?</h2>
                <div class="common-btns m-0">
                    <a href="javascript:void(0)"><p>Contact Sales</p></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Feedbacks -->
    <section class="feedbacks">
        <div class="container position-relative">
            <div class="feedback-header">
                <h3>Loved by Business Owners all Across the <b>Middle East.</b></h3>
                <p>It doesn’t matter who you are. We work to ensure that you have a positive and smooth experience in using our services.</p>
            </div>
            <div class="owl-carousel owl-theme owl-loaded owl-drag">




                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-1286px, 0px, 0px); transition: all 0s ease 0s; width: 3861px;">
                        @foreach($testimonials as $testimonial)
                        <div class="owl-item cloned" style="width: 311.714px; margin-right: 10px;">
                            <div class="item">
                                <div class="feedback-card">
                                    <div class="reviewer-info">
                                        <div class="reviewer-image">
                                            @if($testimonial->photo)
                                                <a href="{{ $testimonial->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                                    <img src="{{ $testimonial->photo->getUrl() }}">
                                                </a>
                                            @endif
                                        </div>
                                        <div class="reviewer-details">
                                            <h3>{{$testimonial->title}}</h3>
                                            <p>{{$testimonial->designation}}</p>
                                        </div>
                                    </div>
                                    <p class="review-text">
                                        {!! $testimonial->review_text !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="owl-nav">
                    <button type="button" role="presentation" class="owl-prev">
                        <img src="{{ asset('images/carousel-arrow-left.svg') }}" alt="Arrow Left">
                    </button>
                    <button type="button" role="presentation" class="owl-next">
                        <img src="{{ asset('images/carousel-arrow-right.svg') }}" alt="Arrow Right">
                    </button>
                </div>
                <div class="owl-dots disabled"></div>
            </div>
        </div>
    </section>

    <!-- Earn Profit, Without Risk -->
    <section class="earn-profit">
        <div class="container">
            <div class="profit-wrap">
                <h4>Earn Profit, Without Risk.</h4>
                <p>You pay us only when you make a sale.</p>
                <div class="profit-total">
                    <div class="total-row">
                        <span>You sell a t-shirt</span>
                        <span>$30</span>
                    </div>
                    <div class="total-row">
                        <span>You pay for its printing</span>
                        <span>$12</span>
                    </div>
                    <hr>
                    <div class="profit-footer m-0">
                        <p>Your profit</p>
                        <p>$15</p>
                    </div>
                </div>
                <div class="common-btns">
                    <a href="javascript:void(0)"><p>Start Selling</p></a>
                </div>
                <ul class="profit-points">
                    <li><img src="{{ asset('images/small-line.svg') }}" alt="Line" class="img-fluid"><p>Absolutely free of cost</p></li>
                    <li><img src="{{ asset('images/small-line.svg') }}" alt="Line" class="img-fluid"><p>300+ Top-Notch products</p></li>
                    <li><img src="{{ asset('images/small-line.svg') }}" alt="Line" class="img-fluid"><p>Extensive print network</p></li>
                </ul>
            </div>
        </div>
    </section>
@endsection
