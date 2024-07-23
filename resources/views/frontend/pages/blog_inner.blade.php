@extends('layouts.main_layout')
@section('content')
    <!-- Blog Details -->
    <section class="blog-details-wrapper">
        <div class="container">
            <div class="blog-details-header">
                <span></span>
                <h1>7 Amazing Beginner Tips Shared in Our Success Stories</h1>
                <div class="tag-time">
                    <p>Trending Designs</p>
                    <small>10 min read</small>
                </div>
            </div>
            <div class="blog-details-image">
                <img src="{{ asset('images/blog-image.png') }}" alt="Blog Image" class="img-fluid">
                <div class="blog-detail-author">
                    <div class="blog-author m-0">
                        <div class="author-image">
                            <img src="{{ asset('images/author.png') }}" alt="Author Image" class="img-fluid">
                        </div>
                        <div>
                            <small>Written By</small>
                            <p>Shandeep Sharma</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-details-content">
                <div class="row">
                    <div class="col-md-8">
                        <p>There are many misconceptions about what it takes to start a print-on-demand business, and even experienced entrepreneurs can often underestimate the time, energy, and skill it takes to succeed in a competitive marketplace. <br><br>

                            In this article, we’re going to take a look back at our Success Stories series and uncover some of the most critical and easily actionable beginner tips for print on demand. These are straight from the mouths of e-commerce veterans – business owners who are already well established in their respective niches.<br><br>

                            Let’s hear what they have to say:</p>
                        <h3 class="mt-4 mb-3">01. Adopting the Right Mindset</h3>
                        <p>Adopting a positive mindset is a crucial and often overlooked part of the journey towards online success. <br><br>

                            Every year, thousands of newcomers decide to start an online business, with aspirations of breaking a million dollars in sales or making passive income while they sip cocktails on the beach. <br><br>

                            There’s absolutely nothing wrong with dreaming big. In fact, it’s an integral part of the entrepreneurial process. The problem is that at some point, you need to stop dreaming and actually take action! <br><br>

                            Unfortunately, many print-on-demand beginners find it difficult to summon the courage to turn their ideas into reality, feeling that they lack the skill or originality to succeed in such a competitive marketplace.</p>
                        <img src="{{ asset('images/hijab-girl.png') }}" alt="Hijab Girl" class="img-fluid">
                        <p>When we interviewed Australian entrepreneur Raihanaty A. Jalil of SHYFT Creations, she explained how she overcame imposter syndrome after taking advice from famous YouTuber Tai Lopez: <br><br>

                            SHYFT Creations is now an established business, making consistent sales for Raihanaty. The Australian entrepreneur’s unique clothing designs are a big part of her success. Still, her ability to emotionally detach from her business and treat the project as an experiment has also helped her to succeed:<br><br>

                            The lesson? Even the most successful online entrepreneurs have seen their fair share of failures. Enjoy the process and treat everything you do as a learning experience.</p>
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
                            <form action="{{route('blog_inner')}}">
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
                            <a href="{{route('blog_inner')}}" class="single-related">
                                <div class="related-article-image">
                                    <img src="{{ asset('images/blog-category-img1.png') }}" alt="Blog Image" class="img-fluid">
                                </div>
                                <div>
                                    <p>WooCommerce vs Shopify: Which is best for your online store?</p>
                                    <small>Marketing Tricks</small>
                                </div>
                            </a>
                            <a href="{{route('blog_inner')}}" class="single-related">
                                <div class="related-article-image">
                                    <img src="{{ asset('images/blog-category-img2.png') }}" alt="Blog Image" class="img-fluid">
                                </div>
                                <div>
                                    <p>20 Print-onoDemand Travel Accessories for your Online Store</p>
                                    <small>Marketing Tricks</small>
                                </div>
                            </a>
                            <a href="{{route('blog_inner')}}" class="single-related">
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
