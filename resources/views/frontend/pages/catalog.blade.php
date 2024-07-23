@extends('layouts.main_layout')
@section('content')
    <!-- Search -->
    <div class="search">
        <div class="container">
            <form action="";>
                <input type="text" placeholder="Search" class="form-control" fdprocessedid="rratxq">
                <img src="{{ asset('images/search.svg') }}" alt="Search Icon" class="img-fluid">
            </form>
        </div>
    </div>
    <!-- How it works -->
    <section class="how-it-works mt-0">
        <div class="container">
            <div class="works-container catalog-container">
                <h1>Men’s Apparel</h1>
                <div class="common-btns mx-auto text-center justify-content-center">
                    <a href="javascript:void(0)">Explore Collection</a>
                </div>
                <div class="how-it-work-bg">
                    <img src="{{ asset('images/jacket.png') }}" alt="Jacket Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Selling types -->
    <section class="seller-type">
        <div class="container">
            <div class="seller-header">
                <h4>Best Seller</h4>
                <a href="javascript:void(0)">See All</a>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="single-shirt">
                        <div class="shirt-image">
                            <img src="{{ asset('images/shirt1.png') }}" alt="Shirt Image" class="img-fluid">
                        </div>
                        <div class="shirt-details">
                            <h4>Unisex Ultra Cotton Tee</h4>
                            <small>Gildan 2000</small>
                            <h6>USD 8.26</h6>
                            <ul>
                                <li>8 sizes</li>
                                <li>64 colors</li>
                                <li>11 print providers</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="single-shirt">
                        <div class="shirt-image">
                            <img src="{{ asset('images/shirt2.png') }}" alt="Shirt Image" class="img-fluid">
                        </div>
                        <div class="shirt-details">
                            <h4>Unisex Heavy Cotton Tee</h4>
                            <small>Gildan 2000</small>
                            <h6>USD 8.26</h6>
                            <ul>
                                <li>8 sizes</li>
                                <li>64 colors</li>
                                <li>11 print providers</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="single-shirt">
                        <div class="shirt-image">
                            <img src="{{ asset('images/shirt3.png') }}" alt="Shirt Image" class="img-fluid">
                        </div>
                        <div class="shirt-details">
                            <h4>Unisex Heavy Blend Crewneck Sweatshirt</h4>
                            <small>Gildan 2000</small>
                            <h6>USD 8.26</h6>
                            <ul>
                                <li>8 sizes</li>
                                <li>64 colors</li>
                                <li>11 print providers</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="single-shirt">
                        <div class="shirt-image">
                            <img src="{{ asset('images/shirt4.png') }}" alt="Shirt Image" class="img-fluid">
                        </div>
                        <div class="shirt-details">
                            <h4>Unisex Ultra Cotton Tee</h4>
                            <small>Gildan 2000</small>
                            <h6>USD 8.26</h6>
                            <ul>
                                <li>8 sizes</li>
                                <li>64 colors</li>
                                <li>11 print providers</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Catalog types -->
    <section class="catalog-types">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="https://demos.farrukhwaseem.com/print-nation/product-page.html" class="catalog-single">
                        <h4>Men’s Apparel </h4>
                        <img src="{{ asset('images/arrow-right-dark.svg') }}" alt="Arrow Right" class="img-fluid">
                        <img src="{{ asset('images/men-apparel.png') }}" alt="Men Apparel" class="img-fluid">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="https://demos.farrukhwaseem.com/print-nation/product-page.html" class="catalog-single">
                        <h4>Women’s Apparel </h4>
                        <img src="{{ asset('images/arrow-right-dark.svg') }}" alt="Arrow Right" class="img-fluid">
                        <img src="{{ asset('images/women-apparel.png') }}" alt="Women Apparel" class="img-fluid">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="https://demos.farrukhwaseem.com/print-nation/product-page.html" class="catalog-single">
                        <h4>Kids Apparel </h4>
                        <img src="{{ asset('images/arrow-right-dark.svg') }}" alt="Arrow Right" class="img-fluid">
                        <img src="{{ asset('images/kids-apparel.png') }}" alt="Kids Apparel" class="img-fluid">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="https://demos.farrukhwaseem.com/print-nation/product-page.html" class="catalog-single">
                        <h4>Accessories </h4>
                        <img src="{{ asset('images/arrow-right-dark.svg') }}" alt="Arrow Right" class="img-fluid">
                        <img src="{{ asset('images/accessories.png') }}" alt="Accessories" class="img-fluid">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="https://demos.farrukhwaseem.com/print-nation/product-page.html" class="catalog-single">
                        <h4>Home Decor </h4>
                        <img src="{{ asset('images/arrow-right-dark.svg') }}" alt="Arrow Right" class="img-fluid">
                        <img src="{{ asset('images/decor.png') }}" alt="Home Decor" class="img-fluid">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="https://demos.farrukhwaseem.com/print-nation/product-page.html" class="catalog-single">
                        <h4>My Favourites</h4>
                        <img src="{{ asset('images/arrow-right-dark.svg') }}" alt="Arrow Right" class="img-fluid">
                        <img src="{{ asset('images/favourite.png') }}" alt="favourite" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Selling types -->
    <section class="seller-type">
        <div class="container">
            <div class="seller-header">
                <h4>New Arrivals</h4>
                <a href="javascript:void(0)">See All</a>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="single-shirt">
                        <div class="shirt-image">
                            <img src="{{ asset('images/shirt1.png') }}" alt="Shirt Image" class="img-fluid">
                        </div>
                        <div class="shirt-details">
                            <h4>Unisex Ultra Cotton Tee</h4>
                            <small>Gildan 2000</small>
                            <h6>USD 8.26</h6>
                            <ul>
                                <li>8 sizes</li>
                                <li>64 colors</li>
                                <li>11 print providers</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="single-shirt">
                        <div class="shirt-image">
                            <img src="{{ asset('images/shirt2.png') }}" alt="Shirt Image" class="img-fluid">
                        </div>
                        <div class="shirt-details">
                            <h4>Unisex Heavy Cotton Tee</h4>
                            <small>Gildan 2000</small>
                            <h6>USD 8.26</h6>
                            <ul>
                                <li>8 sizes</li>
                                <li>64 colors</li>
                                <li>11 print providers</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="single-shirt">
                        <div class="shirt-image">
                            <img src="{{ asset('images/shirt3.png') }}" alt="Shirt Image" class="img-fluid">
                        </div>
                        <div class="shirt-details">
                            <h4>Unisex Heavy Blend Crewneck Sweatshirt</h4>
                            <small>Gildan 2000</small>
                            <h6>USD 8.26</h6>
                            <ul>
                                <li>8 sizes</li>
                                <li>64 colors</li>
                                <li>11 print providers</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="single-shirt">
                        <div class="shirt-image">
                            <img src="{{ asset('images/shirt4.png') }}" alt="Shirt Image" class="img-fluid">
                        </div>
                        <div class="shirt-details">
                            <h4>Unisex Ultra Cotton Tee</h4>
                            <small>Gildan 2000</small>
                            <h6>USD 8.26</h6>
                            <ul>
                                <li>8 sizes</li>
                                <li>64 colors</li>
                                <li>11 print providers</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Selling types -->
    <section class="seller-type">
        <div class="container">
            <div class="seller-header">
                <h4>AOP Clothing</h4>
                <a href="javascript:void(0)">See All</a>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="single-shirt">
                        <div class="shirt-image">
                            <img src="{{ asset('images/shirt1.png') }}" alt="Shirt Image" class="img-fluid">
                        </div>
                        <div class="shirt-details">
                            <h4>Unisex Ultra Cotton Tee</h4>
                            <small>Gildan 2000</small>
                            <h6>USD 8.26</h6>
                            <ul>
                                <li>8 sizes</li>
                                <li>64 colors</li>
                                <li>11 print providers</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="single-shirt">
                        <div class="shirt-image">
                            <img src="{{ asset('images/shirt2.png') }}" alt="Shirt Image" class="img-fluid">
                        </div>
                        <div class="shirt-details">
                            <h4>Unisex Heavy Cotton Tee</h4>
                            <small>Gildan 2000</small>
                            <h6>USD 8.26</h6>
                            <ul>
                                <li>8 sizes</li>
                                <li>64 colors</li>
                                <li>11 print providers</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="single-shirt">
                        <div class="shirt-image">
                            <img src="{{ asset('images/shirt3.png') }}" alt="Shirt Image" class="img-fluid">
                        </div>
                        <div class="shirt-details">
                            <h4>Unisex Heavy Blend Crewneck Sweatshirt</h4>
                            <small>Gildan 2000</small>
                            <h6>USD 8.26</h6>
                            <ul>
                                <li>8 sizes</li>
                                <li>64 colors</li>
                                <li>11 print providers</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="single-shirt">
                        <div class="shirt-image">
                            <img src="{{ asset('images/shirt4.png') }}" alt="Shirt Image" class="img-fluid">
                        </div>
                        <div class="shirt-details">
                            <h4>Unisex Ultra Cotton Tee</h4>
                            <small>Gildan 2000</small>
                            <h6>USD 8.26</h6>
                            <ul>
                                <li>8 sizes</li>
                                <li>64 colors</li>
                                <li>11 print providers</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
