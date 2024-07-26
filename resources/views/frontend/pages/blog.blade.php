@extends('frontend.layouts.main_layout')
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
                @foreach($marketingBlogCategories as $blogCategory)
                <li class="nav-item" role="presentation">

                    <button class="nav-link" id="pills-offer-tab-{{ Str::slug($blogCategory->title) }}-tab" data-bs-toggle="pill" data-bs-target="#pills-offer-tab-{{ Str::slug($blogCategory->title) }}" type="button" role="tab" aria-controls="pills-offer-tab-{{ Str::slug($blogCategory->title) }}" aria-selected="false" tabindex="-1">
                        {{$blogCategory->title}}</button>
                </li>
                @endforeach
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-offer-tab-one" role="tabpanel" aria-labelledby="pills-offer-tab-one-tab">
                    <h2>All Posts</h2>
                    @foreach($marketingBlogArticles as $latest_article)
                    <div class="blog-wrapper">
                        <a href="{{url('blog/'.$latest_article->id)}}" style="text-decoration: none;">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="blog-image">
                                        @foreach($latest_article->image as $key => $media)
                                            <img src="{{ $media->getUrl() }}" alt="Blog Image" class="img-fluid">
                                        @endforeach

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="blog-details">
                                        <div class="tag-time">
                                            <p>Trending Designs</p>
                                            <p>{{$latest_article->duration}} min read</p>
                                        </div>
                                        <h3>{{$latest_article->title}}</h3>
                                        <div style="height: 100px; overflow:hidden;">
                                            <p>{!! $latest_article->article_text !!}</p>
                                        </div>
                                        <div class="blog-author">
                                            <div class="author-image">
                                                <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                                            </div>
                                            <div>
                                                <small>Written By</small>
                                                <p>{{$latest_article->author}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="tab-pane fade" id="pills-offer-tab-two" role="tabpanel" aria-labelledby="pills-offer-tab-two-tab">
                    <h2>Latest Update</h2>
                    <div class="blog-wrapper">
                        @foreach($marketingBlogArticles as $latest_article)
                            <div class="blog-wrapper">
                                <a href="{{url('blog/'.$latest_article->id)}}" style="text-decoration: none;">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="blog-image">
                                                @foreach($latest_article->image as $key => $media)
                                                    <img src="{{ $media->getUrl() }}" alt="Blog Image" class="img-fluid">
                                                @endforeach

                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="blog-details">
                                                <div class="tag-time">
                                                    <p>Trending Designs</p>
                                                    <p>{{$latest_article->duration}} min read</p>
                                                </div>
                                                <h3>{{$latest_article->title}}</h3>
                                                <div style="height: 100px; overflow:hidden;">
                                                    <p>{!! $latest_article->article_text !!}</p>
                                                </div>
                                                <div class="blog-author">
                                                    <div class="author-image">
                                                        <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                                                    </div>
                                                    <div>
                                                        <small>Written By</small>
                                                        <p>{{$latest_article->author}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                @foreach($marketingBlogCategories as $blogCategory)
                    <div class="tab-pane fade" id="pills-offer-tab-{{ Str::slug($blogCategory->title) }}" role="tabpanel" aria-labelledby="pills-offer-tab-{{ Str::slug($blogCategory->title) }}-tab">
                        <h2>{{$blogCategory->title}}</h2>

                    @foreach($blogCategory->articles as $article)
                            <div class="blog-wrapper">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="blog-image">
                                            @foreach($article->image as $key => $media)
                                                <img src="{{ $media->getUrl() }}" alt="Blog Image" class="img-fluid">
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="blog-details">
                                            <div class="tag-time">
                                                <p>Trending Designs</p>
                                                <p>{{$article->duration}} min read</p>
                                            </div>
                                            <h3>{{$article->title}}</h3>
                                            <div style="height: 100px; overflow:hidden;">
                                            <p>{!! $article->article_text !!}</p>
                                            </div>
                                            <div class="blog-author">
                                                <div class="author-image">
                                                    <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                                                </div>
                                                <div>
                                                    <small>Written By</small>
                                                    <p>{{$article->author}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach

                    </div>
                @endforeach




<!--
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

                -->
            </div>

        </div>
    </section>

    @foreach($marketingBlogCategories as $blogCategory)
    <!-- Marketing Tricks -->
    <section class="blog-category">
        <div class="container">
            <h4>{{$blogCategory->title}}</h4>
            <div class="row">
                @foreach($blogCategory->articles as $article)
                <div class="col-md-4">
                    <a href="#" class="blog-image-small">
                        @foreach($article->image as $key => $media)
                            <img src="{{ $media->getUrl() }}" alt="Blog Image" class="img-fluid">
                        @endforeach
                    </a>
                    <a href="#" class="blog-category-details">
                        <div class="tag-time">
                            <p>Marketing Tricks</p>
                            <small>{{$article->duration}} min read</small>
                        </div>
                        <h5>{{$article->title}}</h5>
                        <div class="blog-author m-0">
                            <div class="author-image">
                                <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                            </div>
                            <div>
                                <small>Written By</small>
                                <p>{{$article->author}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endforeach
@endsection
