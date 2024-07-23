@extends('layouts.main_layout')
@section('content')
    <!-- Small Banner -->
    <section class="small-banner">
        <div class="container">
            <div class="sm-bannner-wrap blog-banner">
                <div class="sm-banner-content">
                    <h1>The Print Nation Blog</h1>
                    <p>Catch up with the latest trends in the industry</p>
                    <span></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Blogs Tabs -->
    <section class="blogs-tabs">
        <div class="container">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-offer-tab-one-tab" data-bs-toggle="pill" data-bs-target="#pills-offer-tab-one" type="button" role="tab" aria-controls="pills-offer-tab-one" aria-selected="true">All Posts</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-offer-tab-two-tab" data-bs-toggle="pill" data-bs-target="#pills-offer-tab-two" type="button" role="tab" aria-controls="pills-offer-tab-two" aria-selected="false" tabindex="-1">Latest Updates</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-offer-tab-three-tab" data-bs-toggle="pill" data-bs-target="#pills-offer-tab-three" type="button" role="tab" aria-controls="pills-offer-tab-three" aria-selected="false" tabindex="-1">Marketing Tricks</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-offer-tab-four-tab" data-bs-toggle="pill" data-bs-target="#pills-offer-tab-four" type="button" role="tab" aria-controls="pills-offer-tab-four" aria-selected="false" tabindex="-1">Trending Designs</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-offer-tab-five-tab" data-bs-toggle="pill" data-bs-target="#pills-offer-tab-five" type="button" role="tab" aria-controls="pills-offer-tab-five" aria-selected="false" tabindex="-1">TPN News</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-offer-tab-six-tab" data-bs-toggle="pill" data-bs-target="#pills-offer-tab-six" type="button" role="tab" aria-controls="pills-offer-tab-six" aria-selected="false" tabindex="-1">Success Stories</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-offer-tab-one" role="tabpanel" aria-labelledby="pills-offer-tab-one-tab">
                    <h2>Latest Update</h2>
                    <div class="blog-wrapper">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="blog-image">
                                    <img src="{{ asset('images/blog-image.png') }}" alt="Blog Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="blog-details">
                                    <div class="tag-time">
                                        <p>Trending Designs</p>
                                        <p>10 min read</p>
                                    </div>
                                    <h3>7 Amazing Beginner Tips Shared in Our Success Stories</h3>
                                    <p>Take a look back at our Success Stories series and uncover some of the most critical and easily actionable beginner tips for print on demand.</p>
                                    <div class="blog-author">
                                        <div class="author-image">
                                            <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                                        </div>
                                        <div>
                                            <small>Written By</small>
                                            <p>Shandeep Varma</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-offer-tab-two" role="tabpanel" aria-labelledby="pills-offer-tab-two-tab">
                    <h2>Latest Update</h2>
                    <div class="blog-wrapper">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="blog-image">
                                    <img src="{{ asset('images/blog-image.png') }}" alt="Blog Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="blog-details">
                                    <div class="tag-time">
                                        <p>Trending Designs</p>
                                        <p>10 min read</p>
                                    </div>
                                    <h3>7 Amazing Beginner Tips Shared in Our Success Stories</h3>
                                    <p>Take a look back at our Success Stories series and uncover some of the most critical and easily actionable beginner tips for print on demand.</p>
                                    <div class="blog-author">
                                        <div class="author-image">
                                            <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                                        </div>
                                        <div>
                                            <small>Written By</small>
                                            <p>Shandeep Varma</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-offer-tab-three" role="tabpanel" aria-labelledby="pills-offer-tab-three-tab">
                    <h2>Marketing Tricks</h2>
                    <div class="blog-wrapper">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="blog-image">
                                    <img src="{{ asset('images/blog-image.png') }}" alt="Blog Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="blog-details">
                                    <div class="tag-time">
                                        <p>Trending Designs</p>
                                        <p>10 min read</p>
                                    </div>
                                    <h3>7 Amazing Beginner Tips Shared in Our Success Stories</h3>
                                    <p>Take a look back at our Success Stories series and uncover some of the most critical and easily actionable beginner tips for print on demand.</p>
                                    <div class="blog-author">
                                        <div class="author-image">
                                            <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                                        </div>
                                        <div>
                                            <small>Written By</small>
                                            <p>Shandeep Varma</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-offer-tab-four" role="tabpanel" aria-labelledby="pills-offer-tab-four-tab">
                    <h2>Trending Designs</h2>
                    <div class="blog-wrapper">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="blog-image">
                                    <img src="{{ asset('images/blog-image.png') }}" alt="Blog Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="blog-details">
                                    <div class="tag-time">
                                        <p>Trending Designs</p>
                                        <p>10 min read</p>
                                    </div>
                                    <h3>7 Amazing Beginner Tips Shared in Our Success Stories</h3>
                                    <p>Take a look back at our Success Stories series and uncover some of the most critical and easily actionable beginner tips for print on demand.</p>
                                    <div class="blog-author">
                                        <div class="author-image">
                                            <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                                        </div>
                                        <div>
                                            <small>Written By</small>
                                            <p>Shandeep Varma</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-offer-tab-five" role="tabpanel" aria-labelledby="pills-offer-tab-five-tab">
                    <h2>TPN News</h2>
                    <div class="blog-wrapper">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="blog-image">
                                    <img src="{{ asset('images/blog-image.png') }}" alt="Blog Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="blog-details">
                                    <div class="tag-time">
                                        <p>Trending Designs</p>
                                        <p>10 min read</p>
                                    </div>
                                    <h3>7 Amazing Beginner Tips Shared in Our Success Stories</h3>
                                    <p>Take a look back at our Success Stories series and uncover some of the most critical and easily actionable beginner tips for print on demand.</p>
                                    <div class="blog-author">
                                        <div class="author-image">
                                            <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                                        </div>
                                        <div>
                                            <small>Written By</small>
                                            <p>Shandeep Varma</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-offer-tab-six" role="tabpanel" aria-labelledby="pills-offer-tab-six-tab">
                    <h2>Success Stories</h2>
                    <div class="blog-wrapper">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="blog-image">
                                    <img src="{{ asset('images/blog-image.png') }}" alt="Blog Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="blog-details">
                                    <div class="tag-time">
                                        <p>Trending Designs</p>
                                        <p>10 min read</p>
                                    </div>
                                    <h3>7 Amazing Beginner Tips Shared in Our Success Stories</h3>
                                    <p>Take a look back at our Success Stories series and uncover some of the most critical and easily actionable beginner tips for print on demand.</p>
                                    <div class="blog-author">
                                        <div class="author-image">
                                            <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                                        </div>
                                        <div>
                                            <small>Written By</small>
                                            <p>Shandeep Varma</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Marketing Tricks -->
    <section class="blog-category">
        <div class="container">
            <h4>Marketing Tricks</h4>
            <div class="row">
                <div class="col-md-4">
                    <a href="{{route('blog_inner')}}" class="blog-image-small">
                        <img src="{{ asset('images/blog-category-img1.png') }}" alt="Blog Image" class="img-fluid">
                    </a>
                    <a href="{{route('blog_inner')}}" class="blog-category-details">
                        <div class="tag-time">
                            <p>Marketing Tricks</p>
                            <small>10 min read</small>
                        </div>
                        <h5>WooCommerce vs Shopify: Which is best for your online store?</h5>
                        <div class="blog-author m-0">
                            <div class="author-image">
                                <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                            </div>
                            <div>
                                <small>Written By</small>
                                <p>Shandeep Varma</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('blog_inner')}}" class="blog-image-small">
                        <img src="{{ asset('images/blog-category-img2.png') }}" alt="Blog Image" class="img-fluid">
                    </a>
                    <a href="{{route('blog_inner')}}" class="blog-category-details">
                        <div class="tag-time">
                            <p>Marketing Tricks</p>
                            <small>10 min read</small>
                        </div>
                        <h5>WooCommerce vs Shopify: Which is best for your online store?</h5>
                        <div class="blog-author m-0">
                            <div class="author-image">
                                <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                            </div>
                            <div>
                                <small>Written By</small>
                                <p>Shandeep Varma</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('blog_inner')}}" class="blog-image-small">
                        <img src="{{ asset('images/blog-category-img3.png') }}" alt="Blog Image" class="img-fluid">
                    </a>
                    <a href="{{route('blog_inner')}}" class="blog-category-details">
                        <div class="tag-time">
                            <p>Marketing Tricks</p>
                            <small>10 min read</small>
                        </div>
                        <h5>WooCommerce vs Shopify: Which is best for your online store?</h5>
                        <div class="blog-author m-0">
                            <div class="author-image">
                                <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                            </div>
                            <div>
                                <small>Written By</small>
                                <p>Shandeep Varma</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Marketing Tricks -->
    <section class="blog-category">
        <div class="container">
            <h4>Trending Designs</h4>
            <div class="row">
                <div class="col-md-4">
                    <a href="{{route('blog_inner')}}" class="blog-image-small">
                        <img src="{{ asset('images/blog-category-img1.png') }}" alt="Blog Image" class="img-fluid">
                    </a>
                    <a href="{{route('blog_inner')}}" class="blog-category-details">
                        <div class="tag-time">
                            <p>Marketing Tricks</p>
                            <small>10 min read</small>
                        </div>
                        <h5>WooCommerce vs Shopify: Which is best for your online store?</h5>
                        <div class="blog-author m-0">
                            <div class="author-image">
                                <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                            </div>
                            <div>
                                <small>Written By</small>
                                <p>Shandeep Varma</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('blog_inner')}}" class="blog-image-small">
                        <img src="{{ asset('images/blog-category-img2.png') }}" alt="Blog Image" class="img-fluid">
                    </a>
                    <a href="{{route('blog_inner')}}" class="blog-category-details">
                        <div class="tag-time">
                            <p>Marketing Tricks</p>
                            <small>10 min read</small>
                        </div>
                        <h5>WooCommerce vs Shopify: Which is best for your online store?</h5>
                        <div class="blog-author m-0">
                            <div class="author-image">
                                <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                            </div>
                            <div>
                                <small>Written By</small>
                                <p>Shandeep Varma</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('blog_inner')}}" class="blog-image-small">
                        <img src="{{ asset('images/blog-category-img3.png') }}" alt="Blog Image" class="img-fluid">
                    </a>
                    <a href="{{route('blog_inner')}}" class="blog-category-details">
                        <div class="tag-time">
                            <p>Marketing Tricks</p>
                            <small>10 min read</small>
                        </div>
                        <h5>WooCommerce vs Shopify: Which is best for your online store?</h5>
                        <div class="blog-author m-0">
                            <div class="author-image">
                                <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                            </div>
                            <div>
                                <small>Written By</small>
                                <p>Shandeep Varma</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Marketing Tricks -->
    <section class="blog-category">
        <div class="container">
            <h4>TPN News</h4>
            <div class="row">
                <div class="col-md-4">
                    <a href="{{route('blog_inner')}}" class="blog-image-small">
                        <img src="{{ asset('images/blog-category-img1.png') }}" alt="Blog Image" class="img-fluid">
                    </a>
                    <a href="{{route('blog_inner')}}" class="blog-category-details">
                        <div class="tag-time">
                            <p>Marketing Tricks</p>
                            <small>10 min read</small>
                        </div>
                        <h5>WooCommerce vs Shopify: Which is best for your online store?</h5>
                        <div class="blog-author m-0">
                            <div class="author-image">
                                <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                            </div>
                            <div>
                                <small>Written By</small>
                                <p>Shandeep Varma</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('blog_inner')}}" class="blog-image-small">
                        <img src="{{ asset('images/blog-category-img2.png') }}" alt="Blog Image" class="img-fluid">
                    </a>
                    <a href="{{route('blog_inner')}}" class="blog-category-details">
                        <div class="tag-time">
                            <p>Marketing Tricks</p>
                            <small>10 min read</small>
                        </div>
                        <h5>WooCommerce vs Shopify: Which is best for your online store?</h5>
                        <div class="blog-author m-0">
                            <div class="author-image">
                                <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                            </div>
                            <div>
                                <small>Written By</small>
                                <p>Shandeep Varma</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('blog_inner')}}" class="blog-image-small">
                        <img src="{{ asset('images/blog-category-img3.png') }}" alt="Blog Image" class="img-fluid">
                    </a>
                    <a href="{{route('blog_inner')}}" class="blog-category-details">
                        <div class="tag-time">
                            <p>Marketing Tricks</p>
                            <small>10 min read</small>
                        </div>
                        <h5>WooCommerce vs Shopify: Which is best for your online store?</h5>
                        <div class="blog-author m-0">
                            <div class="author-image">
                                <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                            </div>
                            <div>
                                <small>Written By</small>
                                <p>Shandeep Varma</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Marketing Tricks -->
    <section class="blog-category">
        <div class="container">
            <h4>Success Stories</h4>
            <div class="row">
                <div class="col-md-4">
                    <a href="{{route('blog_inner')}}" class="blog-image-small">
                        <img src="{{ asset('images/blog-category-img1.png') }}" alt="Blog Image" class="img-fluid">
                    </a>
                    <a href="{{route('blog_inner')}}" class="blog-category-details">
                        <div class="tag-time">
                            <p>Marketing Tricks</p>
                            <small>10 min read</small>
                        </div>
                        <h5>WooCommerce vs Shopify: Which is best for your online store?</h5>
                        <div class="blog-author m-0">
                            <div class="author-image">
                                <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                            </div>
                            <div>
                                <small>Written By</small>
                                <p>Shandeep Varma</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('blog_inner')}}" class="blog-image-small">
                        <img src="{{ asset('images/blog-category-img2.png') }}" alt="Blog Image" class="img-fluid">
                    </a>
                    <a href="{{route('blog_inner')}}" class="blog-category-details">
                        <div class="tag-time">
                            <p>Marketing Tricks</p>
                            <small>10 min read</small>
                        </div>
                        <h5>WooCommerce vs Shopify: Which is best for your online store?</h5>
                        <div class="blog-author m-0">
                            <div class="author-image">
                                <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                            </div>
                            <div>
                                <small>Written By</small>
                                <p>Shandeep Varma</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('blog_inner')}}" class="blog-image-small">
                        <img src="{{ asset('images/blog-category-img3.png') }}" alt="Blog Image" class="img-fluid">
                    </a>
                    <a href="{{route('blog_inner')}}" class="blog-category-details">
                        <div class="tag-time">
                            <p>Marketing Tricks</p>
                            <small>10 min read</small>
                        </div>
                        <h5>WooCommerce vs Shopify: Which is best for your online store?</h5>
                        <div class="blog-author m-0">
                            <div class="author-image">
                                <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                            </div>
                            <div>
                                <small>Written By</small>
                                <p>Shandeep Varma</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
