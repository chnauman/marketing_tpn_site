@extends('frontend.layouts.main_layout')
@section('content')
    <!-- Catalog types -->
    <section class="catalog-types">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="https://demos.farrukhwaseem.com/print-nation/product-page.html" class="catalog-single">
                        <h4>T-Shirts </h4>
                        <img src="{{ asset('images/arrow-right-dark.svg') }}" alt="Arrow Right" class="img-fluid">
                        <img src="{{ asset('images/men-apparel.png') }}" alt="Men Apparel" class="img-fluid">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="https://demos.farrukhwaseem.com/print-nation/product-page.html" class="catalog-single">
                        <h4>Hoodies </h4>
                        <img src="{{ asset('images/arrow-right-dark.svg') }}" alt="Arrow Right" class="img-fluid">
                        <img src="{{ asset('images/women-apparel.png') }}" alt="Women Apparel" class="img-fluid">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="https://demos.farrukhwaseem.com/print-nation/product-page.html" class="catalog-single">
                        <h4>Sweatshirts</h4>
                        <img src="{{ asset('images/arrow-right-dark.svg') }}" alt="Arrow Right" class="img-fluid">
                        <img src="{{ asset('images/kids-apparel.png') }}" alt="Kids Apparel" class="img-fluid">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="https://demos.farrukhwaseem.com/print-nation/product-page.html" class="catalog-single">
                        <h4>Long Sleeves </h4>
                        <img src="{{ asset('images/arrow-right-dark.svg') }}" alt="Arrow Right" class="img-fluid">
                        <img src="{{ asset('images/accessories.png') }}" alt="Accessories" class="img-fluid">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="https://demos.farrukhwaseem.com/print-nation/product-page.html" class="catalog-single">
                        <h4>Tank Tops </h4>
                        <img src="{{ asset('images/arrow-right-dark.svg') }}" alt="Arrow Right" class="img-fluid">
                        <img src="{{ asset('images/decor.png') }}" alt="Home Decor" class="img-fluid">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="https://demos.farrukhwaseem.com/print-nation/product-page.html" class="catalog-single">
                        <h4>Sportswear</h4>
                        <img src="{{ asset('images/arrow-right-dark.svg') }}" alt="Arrow Right" class="img-fluid">
                        <img src="{{ asset('images/favourite.png') }}" alt="favourite" class="img-fluid">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="https://demos.farrukhwaseem.com/print-nation/product-page.html" class="catalog-single">
                        <h4>Bottoms</h4>
                        <img src="{{ asset('images/arrow-right-dark.svg') }}" alt="Arrow Right" class="img-fluid">
                        <img src="{{ asset('images/decor.png') }}" alt="Home Decor" class="img-fluid">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="https://demos.farrukhwaseem.com/print-nation/product-page.html" class="catalog-single">
                        <h4>Shoes</h4>
                        <img src="{{ asset('images/arrow-right-dark.svg') }}" alt="Arrow Right" class="img-fluid">
                        <img src="{{ asset('images/favourite.png') }}" alt="favourite" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
