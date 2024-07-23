@extends('layouts.main_layout')
@section('content')
    <!-- How it works -->
    <section class="how-it-works">
        <div class="container">
            <div class="works-container">
                <h1>How it Works</h1>
                <p>With The Print Nation, you get your products printed and delivered quickly with our simplified and automated network. At the best market price. </p>
                <div class="common-btns mx-auto text-center justify-content-center">
                    <a href="javascript:void(0)">Start Selling</a>
                </div>
                <div class="how-it-work-bg">
                    <img src="{{ asset('images/how-it-work-bg.svg') }}" alt="How It works Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Access the power of TPN -->
    <section class="tpn-power">
        <div class="container">
            <h2>Access the Power of TPN in <b>5 Easy Steps.</b></h2>
            <div class="tpn-row">
                <div class="row">
                    <div class="col-md-10 offset-md-2 mx-auto">
                        <div class="row mt-5">
                            <div class="col-md-6 position-relative">
                                <div class="absolute-content">
                                    <h3>Choose</h3>
                                    <p>With over 300 products in our catalog, you can choose a suitable one for your business based on the print provider’s location, price, and processing time.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('images/tpn-img1.svg') }}" alt="TPN Image" class="img-fluid">
                            </div>
                        </div>
                        <div class="row mt-5 column-reverse">
                            <div class="col-md-6">
                                <img src="{{ asset('images/tpn-img2.svg') }}" alt="TPN Image" class="img-fluid">
                            </div>
                            <div class="col-md-6 position-relative">
                                <div class="absolute-content">
                                    <h3>Customize</h3>
                                    <p>Use our free Mockup Machine to add your designs to the products you chose.  With this user-friendly tool, you can easily upload custom designs, switch between color schemes and preview your products in detail.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-6 position-relative">
                                <div class="absolute-content">
                                    <h3>Sample</h3>
                                    <p>Preview the final product by ordering a sample from your chosen print providers.  You can compare samples from different print providers and test their quality.  This helps you to find the right print provider for your business.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('images/tpn-img3.svg') }}" alt="TPN Image" class="img-fluid">
                            </div>
                        </div>
                        <div class="row mt-5 column-reverse">
                            <div class="col-md-6">
                                <img src="{{ asset('images/tpn-img5.svg') }}" alt="TPN Image" class="img-fluid">
                            </div>
                            <div class="col-md-6 position-relative">
                                <div class="absolute-content">
                                    <h3>Publish</h3>
                                    <p>Once you’re satisfied with your product, launch it on your online store.  Based on your TPN plan, you can get your products for a discount and sell them the way you want.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-6 position-relative">
                                <div class="absolute-content">
                                    <h3>Relax</h3>
                                    <p>When a customer orders your product, it will be shipped to the customer directly after it has passed quality control and production. You can track your products easily from your TPN account.  So just sit back and focus on expanding your business while we take care of everything.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('images/tpn-img3.svg') }}" alt="TPN Image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Want a custom solution? -->
    <section class="custom-solution">
        <div class="container">
            <div class="solution-wrapper">
                <div>
                    <h2>Found what you were Searching for?</h2>
                    <p class="text-white">Then get it right now!</p>
                </div>
                <div class="common-btns m-0">
                    <a href="javascript:void(0)"><p>Start Selling</p></a>
                </div>
            </div>
        </div>
    </section>
@endsection
