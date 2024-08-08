@extends('frontend.layouts.main_layout')
@section('content')
    <!-- Product Slider -->
    <section class="product-slider">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="carousel-container">
                        <div class="carousel-thumbnails">
                            @foreach ($images as $index => $image)
                                @if ($image)
                                    <div class="thumnail-image" data-bs-target="#carouselExample" data-bs-slide-to="{{ $index }}">
                                        <img src="{{ $image }}" class="active">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($images as $index => $image)
                                @if ($image)
                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                        <img src="{{ $image }}" class="d-block w-100">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-slider-details">
                        <h1>{{ $product->title }}</h1>
                        <p>{{ $product->sku_prefix }}</p>
                        <div class="review">
                            <ul>
                                <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                            </ul>
                            <small>(62 Reviews)</small>
                        </div>
                        <hr>
                        <div class="choose-color">
                            @if($product->color_values)
                                @foreach(explode(',', $product->color_values) as $color)
                                    <span style="background-color: {{ $color }}; border: 1px solid"></span>
                                @endforeach
                            @else
                                <p>No colors available</p>
                            @endif
                        </div>
                        <div class="choose-size">
                            <span><p class="text-dark"><b>Choose Size</b></p></span>
                            <p>Size Guide</p>
                        </div>
                        <div class="available-sizes">
                            @if($product->size_values)
                            @foreach(explode(',', $product->size_values) as $size)
                                <span>{{ $size }}</span>
                            @endforeach
                            @else
                                <p>No size available</p>
                            @endif
                        </div>
                        <div class="common-btns">
                            <a href="javascript:void(0)" class="w-100" data-bs-toggle="modal" data-bs-target="#designing-modal"><p>Start Designing</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contume Details -->
    <section class="constume-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="costume-detail-col">
                        <h4>Printing Options</h4>
                        <div class="print-guidelines">
                            <h5>DTG Print</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="guideline-row">
                                        <img src="{{ asset('images/orange-check.svg') }}" alt="Check" class="img-fluid">
                                        <p>Front Print</p>
                                    </div>
                                    <div class="guideline-row">
                                        <img src="{{ asset('images/orange-check.svg') }}" alt="Check" class="img-fluid">
                                        <p>Left Sleeve</p>
                                    </div>
                                    <div class="guideline-row">
                                        <img src="{{ asset('images/orange-check.svg') }}" alt="Check" class="img-fluid">
                                        <p>Inside Label</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="guideline-row">
                                        <img src="{{ asset('images/orange-check.svg') }}" alt="Check" class="img-fluid">
                                        <p>Back Print</p>
                                    </div>
                                    <div class="guideline-row">
                                        <img src="{{ asset('images/orange-check.svg') }}" alt="Check" class="img-fluid">
                                        <p>Right Sleeve</p>
                                    </div>
                                    <div class="guideline-row">
                                        <img src="{{ asset('images/orange-check.svg') }}" alt="Check" class="img-fluid">
                                        <p>Outside Label</p>
                                    </div>
                                </div>
                            </div>
                            <a href="javscript:void(0)">See all guidelines</a>
                        </div>
                        <div class="print-guidelines">
                            <h5>Embroidery</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="guideline-row">
                                        <img src="{{ asset('images/orange-check.svg') }}" alt="Check" class="img-fluid">
                                        <p>Left Chest</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="guideline-row">
                                        <img src="{{ asset('images/orange-check.svg') }}" alt="Check" class="img-fluid">
                                        <p>Center Chest</p>
                                    </div>
                                </div>
                            </div>
                            <a href="javscript:void(0)">See all guidelines</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="costume-detail-col">
                        <h4>Style and Fit</h4>
                        <div class="style-fit-content">
                            <h5>Streetwear Look</h5>
                            <p>The heavyweight fabric gives the t-shirt a structured look that’s perfect for streetwear outfits.</p>
                        </div>
                        <div class="style-fit-content">
                            <h5>Regular Fit</h5>
                            <p>Standard length with fabric that allows for free movement</p>
                        </div>
                        <div class="style-fit-content">
                            <h5>Tubular</h5>
                            <p>Constructed from a single piece of cloth without side seams</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="costume-detail-col">
                        <h4>Material</h4>
                        <div class="material-block">
                            <h5>Fabric Thickness</h5>
                            <div class="scale">
                                <div>
                                    <span></span>
                                    <em style="width: 30%"></em>
                                </div>
                                <div><p>Extra Rough</p><p>Extra Soft</p></div>
                            </div>
                        </div>
                        <div class="material-block">
                            <h5>Softness Scale</h5>
                            <div class="scale">
                                <div>
                                    <span></span>
                                    <em style="width: 30%"></em>
                                </div>
                                <div><p>Extra Rough</p><p>Extra Soft</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="costume-detail-col">
                        <h4>Features</h4>
                        <div class="style-fit-content">
                            <h5>Unisex</h5>
                            <p>A classic t-shirt that will fit well for men and women</p>
                        </div>
                        <div class="style-fit-content">
                            <h5>Tear-away Tag</h5>
                            <p>Add a custom inside label after removing the tag.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Costume Tabs -->
    <section class="costume-tabs">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="first-tab" data-bs-toggle="tab" data-bs-target="#first-tab-pane" type="button" role="tab" aria-controls="first-tab-pane" aria-selected="true">Description</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="second-tab" data-bs-toggle="tab" data-bs-target="#second-tab-pane" type="button" role="tab" aria-controls="second-tab-pane" aria-selected="false" tabindex="-1">Shipping</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="third-tab" data-bs-toggle="tab" data-bs-target="#third-tab-pane" type="button" role="tab" aria-controls="third-tab-pane" aria-selected="false" tabindex="-1">File Guidelines</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="fourth-tab" data-bs-toggle="tab" data-bs-target="#fourth-tab-pane" type="button" role="tab" aria-controls="fourth-tab-pane" aria-selected="false" tabindex="-1">Source</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="first-tab-pane" role="tabpanel" aria-labelledby="first-tab" tabindex="0">
                    <div class="row">
                        <div class="col-md-10 offset-md-3 mx-auto">
                            <p>Get a rich and structured look with this Men’s Heavyweight Tee that works well with layered streetwear outfits. It’s durable fabric maintains the sharp lines along the edges and lasts a long time. So just add your design, and surprise your customers with this trendy, new tee. </p>
                            <ul class="costume-tabs-bullets">
                                <li><img src="{{ asset('images/bullet-star.svg') }}" alt="Star" class="img-fluid"><p>100% cotton</p></li>
                                <li><img src="{{ asset('images/bullet-star.svg') }}" alt="Star" class="img-fluid"><p>Sport Grey is 90% cotton, 10% polyester</p></li>
                                <li><img src="{{ asset('images/bullet-star.svg') }}" alt="Star" class="img-fluid"><p>Fabric weight: 5.0–5.3 oz/yd² (170–180 g/m²)</p></li>
                                <li><img src="{{ asset('images/bullet-star.svg') }}" alt="Star" class="img-fluid"><p>Open-end yarn</p></li>
                                <li><img src="{{ asset('images/bullet-star.svg') }}" alt="Star" class="img-fluid"><p>Tubular construction</p></li>
                                <li><img src="{{ asset('images/bullet-star.svg') }}" alt="Star" class="img-fluid"><p>Taped neck and shoulders</p></li>
                                <li><img src="{{ asset('images/bullet-star.svg') }}" alt="Star" class="img-fluid"><p>Double seam at sleeves and bottom hem</p></li>
                                <li><img src="{{ asset('images/bullet-star.svg') }}" alt="Star" class="img-fluid"><p>Tear-away tag</p></li>
                                <li><img src="{{ asset('images/bullet-star.svg') }}" alt="Star" class="img-fluid"><p>This product is made on demand. No minimums.</p></li>
                            </ul>
                            <p>This product is made on demand. No minimums.</p>
                            <h5>Print Care Instructions</h5>
                            <p>Follow our <a href="javascript:void(0)">care instructions</a> to look after your custom printed products.</p>
                            <hr>
                            <!-- <div class="tab-pane-reviews">
                                <div class="row">
                                    <div class="col-md-5 col-lg-4 reviews-container">
                                        <div class="total-tab-reviews">
                                            <h5>33 Review</h5>
                                            <div class="review-total">
                                                <ul>
                                                    <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                                    <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                                    <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                                    <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                                    <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                                </ul>
                                                <p>4.8</p>
                                                <small>(33)</small>
                                            </div>
                                        </div>
                                        <div class="star-row">
                                            <p><b>5 Stars</b></p>
                                            <div class="rating-progress">
                                                <span></span>
                                                <em style="width: 30%"></em>
                                            </div>
                                            <p>(01)</p>
                                        </div>
                                        <div class="star-row">
                                            <p><b>4 Stars</b></p>
                                            <div class="rating-progress">
                                                <span></span>
                                                <em style="width: 20%"></em>
                                            </div>
                                            <p>(01)</p>
                                        </div>
                                        <div class="star-row">
                                            <p><b>3 Stars</b></p>
                                            <div class="rating-progress">
                                                <span></span>
                                                <em style="width: 10%"></em>
                                            </div>
                                            <p>(01)</p>
                                        </div>
                                        <div class="star-row">
                                            <p><b>2 Stars</b></p>
                                            <div class="rating-progress">
                                                <span></span>
                                                <em style="width: 5%"></em>
                                            </div>
                                            <p>(01)</p>
                                        </div>
                                        <div class="star-row">
                                            <p><b>1 Stars</b></p>
                                            <div class="rating-progress">
                                                <span></span>
                                                <em style="width: 0%"></em>
                                            </div>
                                            <p>(01)</p>
                                        </div>
                                        <div class="single-filter mt-4">
                                            <div class="dropdown" data-control="checkbox-dropdown">
                                                <label class="dropdown-label">Language</label>
                                                <div class="dropdown-list">
                                                    <label class="dropdown-option">
                                                        <input type="checkbox" name="dropdown-group" value="Selection 1">
                                                        English
                                                    </label>
                                                    <label class="dropdown-option">
                                                        <input type="checkbox" name="dropdown-group" value="Selection 2">
                                                        Espanol
                                                    </label>
                                                    <label class="dropdown-option">
                                                        <input type="checkbox" name="dropdown-group" value="Selection 3">
                                                        French
                                                    </label>
                                                    <label class="dropdown-option">
                                                        <input type="checkbox" name="dropdown-group" value="Selection 4">
                                                        Deutsch
                                                    </label>
                                                    <label class="dropdown-option">
                                                        <input type="checkbox" name="dropdown-group" value="Selection 5">
                                                        Italiano
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-filter mt-4">
                                            <div class="dropdown" data-control="checkbox-dropdown">
                                                <label class="dropdown-label">Ratings</label>
                                                <div class="dropdown-list">
                                                    <label class="dropdown-option">
                                                        <input type="checkbox" name="dropdown-group" value="Selection 1">
                                                        5 Stars
                                                    </label>
                                                    <label class="dropdown-option">
                                                        <input type="checkbox" name="dropdown-group" value="Selection 2">
                                                        4 Stars
                                                    </label>
                                                    <label class="dropdown-option">
                                                        <input type="checkbox" name="dropdown-group" value="Selection 3">
                                                        3 Stars
                                                    </label>
                                                    <label class="dropdown-option">
                                                        <input type="checkbox" name="dropdown-group" value="Selection 4">
                                                        2 Stars
                                                    </label>
                                                    <label class="dropdown-option">
                                                        <input type="checkbox" name="dropdown-group" value="Selection 5">
                                                        1 Stars
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-filter mt-4">
                                            <div class="dropdown" data-control="checkbox-dropdown">
                                                <label class="dropdown-label">With Picture</label>
                                                <div class="dropdown-list">
                                                    <label class="dropdown-option">
                                                        <input type="checkbox" name="dropdown-group" value="Selection 1">
                                                        With Pictures
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-lg-8">
                                        <div class="most-recent mb-4">
                                            <select name="Most Recent" id="best seller" class="form-select" fdprocessedid="cwv2d">
                                                <option value="Best Seller">Most Recent</option>
                                                <option value="Best Rated">Best Rated</option>
                                                <option value="Best Price">Best Price</option>
                                            </select>
                                        </div>
                                        <div class="most-recent-feedback">
                                            <ul>
                                                <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                                <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                                <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                                <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                                <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                            </ul>
                                            <div class="reviewer-details">
                                                <h5>Zaina Alkuaib</h5>
                                                <small>2 Hours ago from Kuwait</small>
                                                <span>Printing DTG</span>
                                                <span>3XL</span>
                                            </div>
                                            <p>Top quality and perfect fit</p>
                                            <div class="reviewer-photo">
                                                <img src="{{ asset('images/reviewer-photo.png') }}" alt="Reviewer Photo" class="img-fluid">
                                            </div>
                                            <a href="javascript:void(0)">Helpful</a>
                                        </div>
                                        <div class="most-recent-feedback">
                                            <ul>
                                                <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                                <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                                <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                                <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                                <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                            </ul>
                                            <div class="reviewer-details">
                                                <h5>Zaina Alkuaib</h5>
                                                <small>2 Hours ago from Kuwait</small>
                                                <span>Printing DTG</span>
                                                <span>3XL</span>
                                            </div>
                                            <p>Top quality and perfect fit</p>
                                            <div class="reviewer-photo">
                                                <img src="{{ asset('images/reviewer-photo.png') }}" alt="Reviewer Photo" class="img-fluid">
                                            </div>
                                            <a href="javascript:void(0)">Helpful</a>
                                        </div>
                                        <div class="most-recent-feedback">
                                            <ul>
                                                <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                                <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                                <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                                <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                                <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                            </ul>
                                            <div class="reviewer-details">
                                                <h5>Zaina Alkuaib</h5>
                                                <small>2 Hours ago from Kuwait</small>
                                                <span>Printing DTG</span>
                                                <span>3XL</span>
                                            </div>
                                            <p>Top quality and perfect fit</p>
                                            <div class="reviewer-photo">
                                                <img src="{{ asset('images/reviewer-photo.png') }}" alt="Reviewer Photo" class="img-fluid">
                                            </div>
                                            <a href="javascript:void(0)">Helpful</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="reviews-pagination">
                                    <p>First</p>
                                    <div>
                                        <p>1</p>
                                        <p class="active">2</p>
                                        <p>3</p>
                                        <img src="{{ asset('images/line.svg') }}" alt="Line" class="img-fluid">
                                        <p>7</p>
                                        <p>8</p>
                                        <p>9</p>
                                    </div>
                                    <p>Last</p>
                                </div>
                                <div class="review-arrow">
                                    <a href="javascript:void(0)"><img src="{{ asset('images/caret-left.svg') }}" alt="Caret Left" class="img-fluid"></a>
                                    <a href="javascript:void(0)"><img src="{{ asset('images/caret-right.svg') }}" alt="Caret Right" class="img-fluid"></a>
                                </div>
                                <div class="common-btns d-flex justify-content-center">
                                    <a href="javascript:void(0)"><p>Add a Review</p></a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="second-tab-pane" role="tabpanel" aria-labelledby="second-tab" tabindex="0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Country</th>
                                <th>Delivery Time</th>
                                <th>First Item</th>
                                <th>Next Item</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="most-recent justify-content-start">
                                        <select name="Most Recent" id="best seller" class="form-select" fdprocessedid="cwv2d">
                                            <option value="Best Seller">Kuwait</option>
                                            <option value="Best Rated">London</option>
                                            <option value="Best Price">England</option>
                                        </select>
                                    </div>
                                </td>
                                <td><p>8-12 business days</p></td>
                                <td><p>$5.99</p></td>
                                <td><p>$1.25</p></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="more-countries">
                        <h5>Add more countries to compare</h5>
                        <div class="search pt-4">
                            <form action="https://demos.farrukhwaseem.com/print-nation/single-product.html#">
                                <input type="text" placeholder="Search" class="form-control">
                                <img src="{{ asset('images/search.svg') }}" alt="Search Icon" class="img-fluid">
                            </form>
                        </div>
                        <p>Delivery times are estimated and may differ based on the amount of orders to proceed.  You can see the final costs and delivery times during Checkout.</p>
                    </div>
                    <div class="tab-pane-reviews">
                        <div class="row">
                            <div class="col-md-5 col-lg-4 reviews-container">
                                <div class="total-tab-reviews">
                                    <h5>33 Review</h5>
                                    <div class="review-total">
                                        <ul>
                                            <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                            <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                            <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                            <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                            <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        </ul>
                                        <p>4.8</p>
                                        <small>(33)</small>
                                    </div>
                                </div>
                                <div class="star-row">
                                    <p><b>5 Stars</b></p>
                                    <div class="rating-progress">
                                        <span></span>
                                        <em style="width: 30%"></em>
                                    </div>
                                    <p>(01)</p>
                                </div>
                                <div class="star-row">
                                    <p><b>4 Stars</b></p>
                                    <div class="rating-progress">
                                        <span></span>
                                        <em style="width: 20%"></em>
                                    </div>
                                    <p>(01)</p>
                                </div>
                                <div class="star-row">
                                    <p><b>3 Stars</b></p>
                                    <div class="rating-progress">
                                        <span></span>
                                        <em style="width: 10%"></em>
                                    </div>
                                    <p>(01)</p>
                                </div>
                                <div class="star-row">
                                    <p><b>2 Stars</b></p>
                                    <div class="rating-progress">
                                        <span></span>
                                        <em style="width: 5%"></em>
                                    </div>
                                    <p>(01)</p>
                                </div>
                                <div class="star-row">
                                    <p><b>1 Stars</b></p>
                                    <div class="rating-progress">
                                        <span></span>
                                        <em style="width: 0%"></em>
                                    </div>
                                    <p>(01)</p>
                                </div>
                                <div class="single-filter mt-4">
                                    <div class="dropdown" data-control="checkbox-dropdown">
                                        <label class="dropdown-label">Language</label>
                                        <div class="dropdown-list">
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 1">
                                                English
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 2">
                                                Espanol
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 3">
                                                French
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 4">
                                                Deutsch
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 5">
                                                Italiano
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-filter mt-4">
                                    <div class="dropdown" data-control="checkbox-dropdown">
                                        <label class="dropdown-label">Ratings</label>
                                        <div class="dropdown-list">
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 1">
                                                5 Stars
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 2">
                                                4 Stars
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 3">
                                                3 Stars
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 4">
                                                2 Stars
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 5">
                                                1 Stars
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-filter mt-4">
                                    <div class="dropdown" data-control="checkbox-dropdown">
                                        <label class="dropdown-label">With Picture</label>
                                        <div class="dropdown-list">
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 1">
                                                With Pictures
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8">
                                <div class="most-recent mb-4">
                                    <select name="Most Recent" id="best seller" class="form-select" fdprocessedid="cwv2d">
                                        <option value="Best Seller">Most Recent</option>
                                        <option value="Best Rated">Best Rated</option>
                                        <option value="Best Price">Best Price</option>
                                    </select>
                                </div>
                                <div class="most-recent-feedback">
                                    <ul>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                    </ul>
                                    <div class="reviewer-details">
                                        <h5>Zaina Alkuaib</h5>
                                        <small>2 Hours ago from Kuwait</small>
                                        <span>Printing DTG</span>
                                        <span>3XL</span>
                                    </div>
                                    <p>Top quality and perfect fit</p>
                                    <div class="reviewer-photo">
                                        <img src="{{ asset('images/reviewer-photo.png') }}" alt="Reviewer Photo" class="img-fluid">
                                    </div>
                                    <a href="javascript:void(0)">Helpful</a>
                                </div>
                                <div class="most-recent-feedback">
                                    <ul>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                    </ul>
                                    <div class="reviewer-details">
                                        <h5>Zaina Alkuaib</h5>
                                        <small>2 Hours ago from Kuwait</small>
                                        <span>Printing DTG</span>
                                        <span>3XL</span>
                                    </div>
                                    <p>Top quality and perfect fit</p>
                                    <div class="reviewer-photo">
                                        <img src="./The Print Nation_files/reviewer-photo.png" alt="Reviewer Photo" class="img-fluid">
                                    </div>
                                    <a href="javascript:void(0)">Helpful</a>
                                </div>
                                <div class="most-recent-feedback">
                                    <ul>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                    </ul>
                                    <div class="reviewer-details">
                                        <h5>Zaina Alkuaib</h5>
                                        <small>2 Hours ago from Kuwait</small>
                                        <span>Printing DTG</span>
                                        <span>3XL</span>
                                    </div>
                                    <p>Top quality and perfect fit</p>
                                    <div class="reviewer-photo">
                                        <img src="{{ asset('images/reviewer-photo.png') }}" alt="Reviewer Photo" class="img-fluid">
                                    </div>
                                    <a href="javascript:void(0)">Helpful</a>
                                </div>
                            </div>
                        </div>
                        <div class="reviews-pagination">
                            <p>First</p>
                            <div>
                                <p>1</p>
                                <p class="active">2</p>
                                <p>3</p>
                                <img src="{{ asset('images/line.svg') }}" alt="Line" class="img-fluid">
                                <p>7</p>
                                <p>8</p>
                                <p>9</p>
                            </div>
                            <p>Last</p>
                        </div>
                        <div class="review-arrow">
                            <a href="javascript:void(0)"><img src="{{ asset('images/caret-left.svg') }}" alt="Caret Left" class="img-fluid"></a>
                            <a href="javascript:void(0)"><img src="{{ asset('images/caret-right.svg') }}" alt="Caret Right" class="img-fluid"></a>
                        </div>
                        <div class="common-btns d-flex justify-content-center">
                            <a href="javascript:void(0)"><p>Add a Review</p></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="third-tab-pane" role="tabpanel" aria-labelledby="third-tab" tabindex="0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Placement</th>
                                <th>Sizes</th>
                                <th>Print File Size</th>
                                <th>Print File Template</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><p>Outside Label</p></td>
                                <td><p>All sizes</p></td>
                                <td><p>3” x 3”</p></td>
                                <td><a href="javascript:void(0)">Download</a></td>
                            </tr>
                            <tr>
                                <td><p>Outside Label</p></td>
                                <td><p>All sizes</p></td>
                                <td><p>3” x 3”</p></td>
                                <td><a href="javascript:void(0)">Download</a></td>
                            </tr>
                            <tr>
                                <td><p>Outside Label</p></td>
                                <td><p>All sizes</p></td>
                                <td><p>3” x 3”</p></td>
                                <td><a href="javascript:void(0)">Download</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>This is the max print area.  We scale graphics according to the product size.</p>
                    <div class="guidelines-product">
                        <h5>Guidelines to get the best final product</h5>
                        <div class="guideline-row align-items-start gap-25">
                            <span>01</span>
                            <div>
                                <h6>Submit the files in PNG or JPEG format with atleast 150 DPI</h6>
                                <p>We recommend using PNG for designs with a transparent background and JPEG for other designs.</p>
                            </div>
                        </div>
                        <div class="guideline-row align-items-start gap-25">
                            <span>02</span>
                            <div>
                                <h6>Create files in sRGB color profile</h6>
                                <p>Make sure you create your print file in sRGB color profile so that your design looks the same when it's printed.</p>
                            </div>
                        </div>
                        <div class="guideline-row align-items-start gap-25">
                            <span>03</span>
                            <div>
                                <h6>Remove print file template guidelines</h6>
                                <p>When you are using our downloadable templates, delete the guide layers and save your files.  If it’s not deleted, the lines will show up when the product is printed.</p>
                            </div>
                        </div>
                        <h5>Tips for best results</h5>
                        <ul class="costume-tabs-bullets detailed-bullets">
                            <li class="align-items-start"><img src="{{ asset('images/bullet-star.svg') }}" alt="Star" class="img-fluid"><div><h6>Avoid semi-transparent designs</h6><p>Semi-transparent graphics (or elements with lowered opacity) may look great on your screen but they don't come out well  in DTG printing.  So use solid colors, or simulate semi-transparency by halftoning (for more information, see our video tutorial).</p></div></li>
                            <li class="align-items-start"><img src="{{ asset('images/bullet-star.svg') }}" alt="Star" class="img-fluid"><div><h6>Create designs with the necessary DPI</h6><p>Simply typing in a new resolution value into the file won't result in a higher resolution print. If your graphic's resolution is too low, the best solution is to recreate it.</p></div></li>
                            <li class="align-items-start"><img src="{{ asset('images/bullet-star.svg') }}" alt="Star" class="img-fluid"><div><h6>Use transparency to your advantage</h6><p>Black ink will appear gray on black garments because of the white underbase used during printing. So you can leave these areas fully transparent when designing for black garments.</p></div></li>
                            <li class="align-items-start"><img src="{{ asset('images/bullet-star.svg') }}" alt="Star" class="img-fluid"><div><h6>Avoid borders when designing sleeve prints</h6><p>Try not to use graphics with perfect borders for sleeve printing, because the print can warp slightly when the sleeve is being pulled off the pallet.</p></div></li>
                        </ul>
                        <h5>DTG disclaimers</h5>
                        <ul class="costume-tabs-bullets detailed-bullets">
                            <li class="align-items-start"><img src="{{ asset('images/bullet-star.svg') }}" alt="Star" class="img-fluid"><p>We don't print white ink on white garments. Any designs containing white color will have areas with no print on them.</p></li>
                            <li class="align-items-start"><img src="{{ asset('images/bullet-star.svg') }}" alt="Star" class="img-fluid"><p>Light ink elements on bright-colored garments might look tinted. This is most evident on Red, Maroon, and other similarly colored garments.</p></li>
                            <li class="align-items-start"><img src="{{ asset('images/bullet-star.svg') }}" alt="Star" class="img-fluid"><p>There might be slight discrepancies in print placement.</p></li>
                            <li class="align-items-start"><img src="{{ asset('images/bullet-star.svg') }}" alt="Star" class="img-fluid"><p>We can't guarantee 100% color accuracy if your files aren’t adjusted using our color swatches (download).</p></li>
                            <li class="align-items-start"><img src="{{ asset('images/bullet-star.svg') }}" alt="Star" class="img-fluid"><p>Read more about DTG printing here.</p></li>
                        </ul>
                        <h5>Tutorial videos</h5>
                        <img src="./The Print Nation_files/video.png" alt="Video Image" class="img-fluid">
                    </div>
                    <div class="tab-pane-reviews">
                        <div class="row">
                            <div class="col-md-5 col-lg-4 reviews-container">
                                <div class="total-tab-reviews">
                                    <h5>33 Review</h5>
                                    <div class="review-total">
                                        <ul>
                                            <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                            <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                            <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                            <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                            <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        </ul>
                                        <p>4.8</p>
                                        <small>(33)</small>
                                    </div>
                                </div>
                                <div class="star-row">
                                    <p><b>5 Stars</b></p>
                                    <div class="rating-progress">
                                        <span></span>
                                        <em style="width: 30%"></em>
                                    </div>
                                    <p>(01)</p>
                                </div>
                                <div class="star-row">
                                    <p><b>4 Stars</b></p>
                                    <div class="rating-progress">
                                        <span></span>
                                        <em style="width: 20%"></em>
                                    </div>
                                    <p>(01)</p>
                                </div>
                                <div class="star-row">
                                    <p><b>3 Stars</b></p>
                                    <div class="rating-progress">
                                        <span></span>
                                        <em style="width: 10%"></em>
                                    </div>
                                    <p>(01)</p>
                                </div>
                                <div class="star-row">
                                    <p><b>2 Stars</b></p>
                                    <div class="rating-progress">
                                        <span></span>
                                        <em style="width: 5%"></em>
                                    </div>
                                    <p>(01)</p>
                                </div>
                                <div class="star-row">
                                    <p><b>1 Stars</b></p>
                                    <div class="rating-progress">
                                        <span></span>
                                        <em style="width: 0%"></em>
                                    </div>
                                    <p>(01)</p>
                                </div>
                                <div class="single-filter mt-4">
                                    <div class="dropdown" data-control="checkbox-dropdown">
                                        <label class="dropdown-label">Language</label>
                                        <div class="dropdown-list">
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 1">
                                                English
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 2">
                                                Espanol
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 3">
                                                French
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 4">
                                                Deutsch
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 5">
                                                Italiano
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-filter mt-4">
                                    <div class="dropdown" data-control="checkbox-dropdown">
                                        <label class="dropdown-label">Ratings</label>
                                        <div class="dropdown-list">
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 1">
                                                5 Stars
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 2">
                                                4 Stars
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 3">
                                                3 Stars
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 4">
                                                2 Stars
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 5">
                                                1 Stars
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-filter mt-4">
                                    <div class="dropdown" data-control="checkbox-dropdown">
                                        <label class="dropdown-label">With Picture</label>
                                        <div class="dropdown-list">
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 1">
                                                With Pictures
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8">
                                <div class="most-recent mb-4">
                                    <select name="Most Recent" id="best seller" class="form-select" fdprocessedid="cwv2d">
                                        <option value="Best Seller">Most Recent</option>
                                        <option value="Best Rated">Best Rated</option>
                                        <option value="Best Price">Best Price</option>
                                    </select>
                                </div>
                                <div class="most-recent-feedback">
                                    <ul>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                    </ul>
                                    <div class="reviewer-details">
                                        <h5>Zaina Alkuaib</h5>
                                        <small>2 Hours ago from Kuwait</small>
                                        <span>Printing DTG</span>
                                        <span>3XL</span>
                                    </div>
                                    <p>Top quality and perfect fit</p>
                                    <div class="reviewer-photo">
                                        <img src="{{ asset('images/reviewer-photo.png') }}" alt="Reviewer Photo" class="img-fluid">
                                    </div>
                                    <a href="javascript:void(0)">Helpful</a>
                                </div>
                                <div class="most-recent-feedback">
                                    <ul>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                    </ul>
                                    <div class="reviewer-details">
                                        <h5>Zaina Alkuaib</h5>
                                        <small>2 Hours ago from Kuwait</small>
                                        <span>Printing DTG</span>
                                        <span>3XL</span>
                                    </div>
                                    <p>Top quality and perfect fit</p>
                                    <div class="reviewer-photo">
                                        <img src="{{ asset('images/reviewer-photo.png') }}" alt="Reviewer Photo" class="img-fluid">
                                    </div>
                                    <a href="javascript:void(0)">Helpful</a>
                                </div>
                                <div class="most-recent-feedback">
                                    <ul>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                    </ul>
                                    <div class="reviewer-details">
                                        <h5>Zaina Alkuaib</h5>
                                        <small>2 Hours ago from Kuwait</small>
                                        <span>Printing DTG</span>
                                        <span>3XL</span>
                                    </div>
                                    <p>Top quality and perfect fit</p>
                                    <div class="reviewer-photo">
                                        <img src="{{ asset('images/reviewer-photo.png') }}" alt="Reviewer Photo" class="img-fluid">
                                    </div>
                                    <a href="javascript:void(0)">Helpful</a>
                                </div>
                            </div>
                        </div>
                        <div class="reviews-pagination">
                            <p>First</p>
                            <div>
                                <p>1</p>
                                <p class="active">2</p>
                                <p>3</p>
                                <img src="{{ asset('images/line.svg') }}" alt="Line" class="img-fluid">
                                <p>7</p>
                                <p>8</p>
                                <p>9</p>
                            </div>
                            <p>Last</p>
                        </div>
                        <div class="review-arrow">
                            <a href="javascript:void(0)"><img src="{{ asset('images/caret-left.svg') }}" alt="Caret Left" class="img-fluid"></a>
                            <a href="javascript:void(0)"><img src="{{ asset('images/caret-right.svg') }}" alt="Caret Right" class="img-fluid"></a>
                        </div>
                        <div class="common-btns d-flex justify-content-center">
                            <a href="javascript:void(0)"><p>Add a Review</p></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="fourth-tab-pane" role="tabpanel" aria-labelledby="fourth-tab" tabindex="0">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('images/map.svg') }}" alt="Map" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <div class="map-details">
                                <h6>Blank Product Sourced From:</h6>
                                <div class="locations">
                                    <p>Kuwait</p>
                                    <p>Egypt</p>
                                    <p>Bahrain</p>
                                </div>
                                <small>Gildan redefines eco-friendly fashion by producing garments at low environmental costs.  Through the Genuine Responsibility program,Gildan makes a wide variety of outfits using renewable energy and less water than the industry average.</small>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Additional Information
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Know more about <b>Gildan</b></p>
                                                <p>Learn about <b>Genuine Responsibility®</b></p>
                                                <p>See our <b>products in action</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane-reviews">
                        <div class="row">
                            <div class="col-md-5 col-lg-4 reviews-container">
                                <div class="total-tab-reviews">
                                    <h5>33 Review</h5>
                                    <div class="review-total">
                                        <ul>
                                            <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                            <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                            <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                            <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                            <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        </ul>
                                        <p>4.8</p>
                                        <small>(33)</small>
                                    </div>
                                </div>
                                <div class="star-row">
                                    <p><b>5 Stars</b></p>
                                    <div class="rating-progress">
                                        <span></span>
                                        <em style="width: 30%"></em>
                                    </div>
                                    <p>(01)</p>
                                </div>
                                <div class="star-row">
                                    <p><b>4 Stars</b></p>
                                    <div class="rating-progress">
                                        <span></span>
                                        <em style="width: 20%"></em>
                                    </div>
                                    <p>(01)</p>
                                </div>
                                <div class="star-row">
                                    <p><b>3 Stars</b></p>
                                    <div class="rating-progress">
                                        <span></span>
                                        <em style="width: 10%"></em>
                                    </div>
                                    <p>(01)</p>
                                </div>
                                <div class="star-row">
                                    <p><b>2 Stars</b></p>
                                    <div class="rating-progress">
                                        <span></span>
                                        <em style="width: 5%"></em>
                                    </div>
                                    <p>(01)</p>
                                </div>
                                <div class="star-row">
                                    <p><b>1 Stars</b></p>
                                    <div class="rating-progress">
                                        <span></span>
                                        <em style="width: 0%"></em>
                                    </div>
                                    <p>(01)</p>
                                </div>
                                <div class="single-filter mt-4">
                                    <div class="dropdown" data-control="checkbox-dropdown">
                                        <label class="dropdown-label">Language</label>
                                        <div class="dropdown-list">
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 1">
                                                English
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 2">
                                                Espanol
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 3">
                                                French
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 4">
                                                Deutsch
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 5">
                                                Italiano
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-filter mt-4">
                                    <div class="dropdown" data-control="checkbox-dropdown">
                                        <label class="dropdown-label">Ratings</label>
                                        <div class="dropdown-list">
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 1">
                                                5 Stars
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 2">
                                                4 Stars
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 3">
                                                3 Stars
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 4">
                                                2 Stars
                                            </label>
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 5">
                                                1 Stars
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-filter mt-4">
                                    <div class="dropdown" data-control="checkbox-dropdown">
                                        <label class="dropdown-label">With Picture</label>
                                        <div class="dropdown-list">
                                            <label class="dropdown-option">
                                                <input type="checkbox" name="dropdown-group" value="Selection 1">
                                                With Pictures
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8">
                                <div class="most-recent mb-4">
                                    <select name="Most Recent" id="best seller" class="form-select" fdprocessedid="cwv2d">
                                        <option value="Best Seller">Most Recent</option>
                                        <option value="Best Rated">Best Rated</option>
                                        <option value="Best Price">Best Price</option>
                                    </select>
                                </div>
                                <div class="most-recent-feedback">
                                    <ul>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                    </ul>
                                    <div class="reviewer-details">
                                        <h5>Zaina Alkuaib</h5>
                                        <small>2 Hours ago from Kuwait</small>
                                        <span>Printing DTG</span>
                                        <span>3XL</span>
                                    </div>
                                    <p>Top quality and perfect fit</p>
                                    <div class="reviewer-photo">
                                        <img src="{{ asset('images/reviewer-photo.png') }}" alt="Reviewer Photo" class="img-fluid">
                                    </div>
                                    <a href="javascript:void(0)">Helpful</a>
                                </div>
                                <div class="most-recent-feedback">
                                    <ul>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                    </ul>
                                    <div class="reviewer-details">
                                        <h5>Zaina Alkuaib</h5>
                                        <small>2 Hours ago from Kuwait</small>
                                        <span>Printing DTG</span>
                                        <span>3XL</span>
                                    </div>
                                    <p>Top quality and perfect fit</p>
                                    <div class="reviewer-photo">
                                        <img src="{{ asset('images/reviewer-photo.png') }}" alt="Reviewer Photo" class="img-fluid">
                                    </div>
                                    <a href="javascript:void(0)">Helpful</a>
                                </div>
                                <div class="most-recent-feedback">
                                    <ul>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                        <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                    </ul>
                                    <div class="reviewer-details">
                                        <h5>Zaina Alkuaib</h5>
                                        <small>2 Hours ago from Kuwait</small>
                                        <span>Printing DTG</span>
                                        <span>3XL</span>
                                    </div>
                                    <p>Top quality and perfect fit</p>
                                    <div class="reviewer-photo">
                                        <img src="{{ asset('images/reviewer-photo.png') }}" alt="Reviewer Photo" class="img-fluid">
                                    </div>
                                    <a href="javascript:void(0)">Helpful</a>
                                </div>
                            </div>
                        </div>
                        <div class="reviews-pagination">
                            <p>First</p>
                            <div>
                                <p>1</p>
                                <p class="active">2</p>
                                <p>3</p>
                                <img src="{{ asset('images/line.svg') }}" alt="Line" class="img-fluid">
                                <p>7</p>
                                <p>8</p>
                                <p>9</p>
                            </div>
                            <p>Last</p>
                        </div>
                        <div class="review-arrow">
                            <a href="javascript:void(0)"><img src="{{ asset('images/caret-left.svg') }}" alt="Caret Left" class="img-fluid"></a>
                            <a href="javascript:void(0)"><img src="{{ asset('images/caret-right.svg') }}" alt="Caret Right" class="img-fluid"></a>
                        </div>
                        <div class="common-btns d-flex justify-content-center">
                            <a href="javascript:void(0)"><p>Add a Review</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <!-- <div class="modal fade " id="designing-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Men’s Heavyweight Tee</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="product-design-tabs">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><img src="./The Print Nation_files/product-icon-dark.svg" alt="Icon"><p>Product</p></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" tabindex="-1"><img src="./The Print Nation_files/design-icon-dark.svg" alt="Icon"><p>Design</p></button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                        <div class="product-slider-details">
                                            <h1 class="fs-4">Men’s Heavy Weight Tee</h1>
                                            <p>Gildan 5000</p>
                                            <div class="review">
                                                <ul>
                                                    <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                                    <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                                    <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                                    <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                                    <li><img src="{{ asset('images/star.svg') }}" alt="Star" class="img-fluid"></li>
                                                </ul>
                                                <small>(62 Reviews)</small>
                                            </div>
                                            <a href="javascript:void(0)" class="fs-6 text-orange fw-normal">Product Info, Pricing and Guidelines</a>
                                            <small class="d-block">Available product customization based on your preferences and selling region.</small>
                                            <h4 class="fs-5 fw-bold mt-4">Choose Color</h4>
                                            <div class="choose-color">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                            <div class="choose-size">
                                                <span><p class="text-dark"><b>Choose Size</b></p></span>
                                                <p>Size Guide</p>
                                            </div>
                                            <div class="available-sizes">
                                                <span>S</span>
                                                <span>M</span>
                                                <span>L</span>
                                                <span>XL</span>
                                                <span>2XL</span>
                                                <span>3XL</span>
                                            </div>
                                            <div class="next-steps">
                                                <h5>Next Steps</h5>
                                                <div class="next-steps-wrap">
                                                    <div><img src="{{ asset('images/upload.svg') }}" alt="Upload"><p>Choose File</p></div>
                                                    <div><img src="{{ asset('images/font.svg') }}" alt="Add Text"><p>Add Text</p></div>
                                                    <div><img src="{{ asset('images/add-clipart.svg') }}" alt="Add Clipart"><p>Add Clipart</p></div>
                                                    <div><img src="{{ asset('images/quick-design.svg') }}" alt="Quick Design"><p>Add Quick Design</p></div>
                                                    <div><img src="{{ asset('images/premium-images.svg') }}" alt="Premium Images"><p>Premium Images</p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                        <div class="product-slider-details">
                                            <div class="next-steps">
                                                <div class="next-steps-wrap">
                                                    <div><img src="{{ asset('images/upload.svg') }}" alt="Upload"><p>Choose File</p></div>
                                                    <div><img src="{{ asset('images/font.svg') }}" alt="Add Text"><p>Add Text</p></div>
                                                    <div><img src="{{ asset('images/add-clipart.svg') }}" alt="Add Clipart"><p>Add Clipart</p></div>
                                                    <div><img src="{{ asset('images/quick-design.svg') }}" alt="Quick Design"><p>Add Quick Design</p></div>
                                                    <div><img src="{{ asset('images/premium-images.svg') }}" alt="Premium Images"><p>Premium Images</p></div>
                                                </div>
                                            </div>
                                            <div class="tutorial-video">
                                                <div>
                                                    <h5>Tutorial Video</h5>
                                                    <small>Hide</small>
                                                </div>
                                                <img src="{{ asset('images/video.png') }}" width="100%" alt="Video Image" class="img-fluid">
                                            </div>
                                            <img src="{{ asset('images/shirt5.png') }}" width="100%" alt="Shirt" class="img-fluid mt-3">
                                            <div class="all-it-takes">
                                                <h6>All it Takes is Just a Click</h6>
                                                <p>Design instantly with our pre-made Quick Designs.  Just place them directly on any product, adjust text or colors and you’re good to go!</p>
                                                <div class="skip-try-them">
                                                    <a href="javascript:void(0)">Skip</a>
                                                    <div class="try-them">
                                                        <p>Try Them</p>
                                                        <img src="{{ asset('images/long-arrow-right.svg') }}" alt="Long Arrow Right" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <ul class="nav nav-pills mb-3" id="shirt-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-first-tab" data-bs-toggle="pill" data-bs-target="#pills-first" type="button" role="tab" aria-controls="pills-first" aria-selected="true">Front</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-second-tab" data-bs-toggle="pill" data-bs-target="#pills-second" type="button" role="tab" aria-controls="pills-second" aria-selected="false" tabindex="-1">Back</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-third-tab" data-bs-toggle="pill" data-bs-target="#pills-third" type="button" role="tab" aria-controls="pills-third" aria-selected="false" tabindex="-1">Outside Label</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-fourth-tab" data-bs-toggle="pill" data-bs-target="#pills-fourth" type="button" role="tab" aria-controls="pills-fourth" aria-selected="false" tabindex="-1">Inside Label</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-fifth-tab" data-bs-toggle="pill" data-bs-target="#pills-fifth" type="button" role="tab" aria-controls="pills-fifth" aria-selected="false" tabindex="-1">Left Sleeve</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-sixth-tab" data-bs-toggle="pill" data-bs-target="#pills-sixth" type="button" role="tab" aria-controls="pills-sixth" aria-selected="false" tabindex="-1">Right Sleeve</button>
                                </li>

                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-first" role="tabpanel" aria-labelledby="pills-first-tab" tabindex="0">
                                    <div class="shirt-editing"><img src="{{ asset('images/shirt-edit.png') }}" alt="Shirt Edit" class="img-fluid">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-second" role="tabpanel" aria-labelledby="pills-second-tab" tabindex="0">
                                    <div class="shirt-editing"><img src="{{ asset('images/shirt-edit.png') }}" alt="Shirt Edit" class="img-fluid">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-third" role="tabpanel" aria-labelledby="pills-third-tab" tabindex="0">
                                    <div class="shirt-editing"><img src="{{ asset('images/shirt-edit.png') }}" alt="Shirt Edit" class="img-fluid">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-fourth" role="tabpanel" aria-labelledby="pills-fourth-tab" tabindex="0">
                                    <div class="shirt-editing"><img src="{{ asset('images/shirt-edit.png') }}" alt="Shirt Edit" class="img-fluid">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-fifth" role="tabpanel" aria-labelledby="pills-fifth-tab" tabindex="0">
                                    <div class="shirt-editing"><img src="{{ asset('images/shirt-edit.png') }}" alt="Shirt Edit" class="img-fluid">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-sixth" role="tabpanel" aria-labelledby="pills-sixth-tab" tabindex="0">
                                    <div class="shirt-editing"><img src="{{ asset('images/shirt-edit.png') }}" alt="Shirt Edit" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer mt-4">
                    <div class="common-btns m-0">
                        <a href="javascript:void(0)" class="w-100" data-bs-toggle="modal" data-bs-target="#designing-modal" aria-disabled="true"><p>Add to Cart</p></a>
                    </div>
                    <div>
                        <p class="text-orange">USD 8.26</p>
                        <p class="text-darl fs-6 fw-normal">Exclusive of taxes and other charges</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js.download') }}"></script>
    <script src="{{ asset('js/popper.min.js.download') }}" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js.download') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js.download') }}"></script>
    <script>

        (function($) {
            var CheckboxDropdown = function(el) {
                var _this = this;
                this.isOpen = false;
                this.areAllChecked = false;
                this.$el = $(el);
                this.$label = this.$el.find('.dropdown-label');
                this.$checkAll = this.$el.find('[data-toggle="check-all"]').first();
                this.$inputs = this.$el.find('[type="checkbox"]');

                this.onCheckBox();

                this.$label.on('click', function(e) {
                    e.preventDefault();
                    _this.toggleOpen();
                });

            };

            CheckboxDropdown.prototype.onCheckBox = function() {
                this.updateStatus();
            };

            CheckboxDropdown.prototype.updateStatus = function() {
                var checked = this.$el.find(':checked');

                this.areAllChecked = false;
                this.$checkAll.html('Check All');
            };

            CheckboxDropdown.prototype.onCheckAll = function(checkAll) {
                if(!this.areAllChecked || checkAll) {
                    this.areAllChecked = true;
                    this.$checkAll.html('Uncheck All');
                    this.$inputs.prop('checked', true);
                }
                else {
                    this.areAllChecked = false;
                    this.$checkAll.html('Check All');
                    this.$inputs.prop('checked', false);
                }

                this.updateStatus();
            };

            CheckboxDropdown.prototype.toggleOpen = function(forceOpen) {
                var _this = this;

                if(!this.isOpen || forceOpen) {
                    this.isOpen = true;
                    this.$el.addClass('on');
                    $(document).on('click', function(e) {
                        if(!$(e.target).closest('[data-control]').length) {
                            _this.toggleOpen();
                        }
                    });
                }
                else {
                    this.isOpen = false;
                    this.$el.removeClass('on');
                    $(document).off('click');
                }
            };

            var checkboxesDropdowns = document.querySelectorAll('[data-control="checkbox-dropdown"]');
            for(var i = 0, length = checkboxesDropdowns.length; i < length; i++) {
                new CheckboxDropdown(checkboxesDropdowns[i]);
            }
        })(jQuery);
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                center: true,
                navText: ['<img src="{{ asset('images/carousel-arrow-left.svg') }}" alt="Arrow Left">', '<img src="{{ asset('images/carousel-arrow-right.svg') }}" alt="Arrow Right">'],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });

    </script> -->

@endsection
