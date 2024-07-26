@extends('frontend.layouts.main_layout')
@section('content')
    <!-- Blog Details -->
    <section class="blog-details-wrapper">
        <div class="container">
            <div class="blog-details-header">
                <span></span>
                <h1>{{$blogArticle->title}}</h1>
                <div class="tag-time">
                    <p>Trending Designs</p>
                    <small>{{$blogArticle->duration}} min read</small>
                </div>
            </div>
            <div class="blog-details-image">
                @foreach($blogArticle->image as $key => $media)
                    <img src="{{ $media->getUrl() }}" alt="Blog Image" class="img-fluid">
                @endforeach
                <div class="blog-detail-author">
                    <div class="blog-author m-0">
                        <div class="author-image">
                            <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                        </div>
                        <div>
                            <small>Written By</small>
                            <p>{{$blogArticle->author}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-details-content">
                <div class="row">
                    <div class="col-md-8">
                        {!! $blogArticle->article_text !!}
                        <div class="make-it-happen">
                            <h3>Make it Happen Today!</h3>
                            <div class="common-btns m-0">
                                <a href="javascript:void(0)">Start Selling</a>
                            </div>
                        </div>
                        <div class="share-article">
                            <h5>Share the Article</h5>
                            <div class="social-media justify-content-start m-0">
                                <a href="javascript:void(0)"><img src="{{ asset('images/facebook.svg') }}" alt="FB" class="img-fluid m-0"></a>
                                <a href="javascript:void(0)"><img src="{{ asset('images/linkedin.svg') }}" alt="Linkedin" class="img-fluid m-0"></a>
                                <a href="javascript:void(0)"><img src="{{ asset('images/gmail.svg') }}" alt="Gmail" class="img-fluid m-0"></a>
                                <a href="javascript:void(0)"><img src="{{ asset('images/twitter.svg') }}" alt="X" class="img-fluid m-0"></a>
                            </div>
                        </div>
                        <div class="article-comment mt-5">
                            <h5>Comment</h5>
                            <form action="#">
                                <textarea name="comment" id="comment" class="form-control"></textarea>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" placeholder="name" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" placeholder="email" class="form-control">
                                    </div>
                                </div>
                                <input type="submit" value="Post Comment" class="btn">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="related-articles">
                            <h4>Related Articles</h4>
                            <a href="#" class="single-related">
                                <div class="related-article-image">
                                    <img src="{{ asset('images/blog-category-img1.png') }}" alt="Blog Image" class="img-fluid">
                                </div>
                                <div>
                                    <p>WooCommerce vs Shopify: Which is best for your online store?</p>
                                    <small>Marketing Tricks</small>
                                </div>
                            </a>
                            <a href="#" class="single-related">
                                <div class="related-article-image">
                                    <img src="{{ asset('images/blog-category-img2.png') }}" alt="Blog Image" class="img-fluid">
                                </div>
                                <div>
                                    <p>20 Print-onoDemand Travel Accessories for your Online Store</p>
                                    <small>Marketing Tricks</small>
                                </div>
                            </a>
                            <a href="#" class="single-related">
                                <div class="related-article-image">
                                    <img src="{{ asset('images/blog-category-img3.png') }}" alt="Blog Image" class="img-fluid">
                                </div>
                                <div>
                                    <p>The Next Big Trend - Custom Luggage Tag and Suitcases</p>
                                    <small>Marketing Tricks</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
