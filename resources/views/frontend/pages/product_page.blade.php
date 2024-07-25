@extends('frontend.layouts.main_layout')
@section('content')
    <!-- Search bar -->
    <div class="search">
        <div class="container">
            <form action="#">
                <input type="text" placeholder="Search" class="form-control">
                <img src="{{ asset('images/search.svg') }}" alt="Search Icon" class="img-fluid">
            </form>
        </div>
    </div>

    <!-- T shirts -->
    <section class="products-filters">
        <div class="container">
            <div class="product-filter-header mb-4">
                <div>
                    <div class="product-breadcrumbs">
                        <ul>
                            <li><a href="javascript:void(0)">Catalog</a></li>
                            <li><a href="javascript:void(0)">Men's Clothing</a></li>
                            <li><a href="javascript:void(0)">T-shirts</a></li>
                        </ul>
                    </div>
                    <h1>T-Shirts</h1>
                </div>
                <select name="best seller" id="best seller" class="form-select">
                    <option value="Best Seller">Best Seller</option>
                    <option value="Best Rated">Best Rated</option>
                    <option value="Best Price">Best Price</option>
                </select>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="single-filter">
                        <div class="dropdown" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Colors</label>
                            <div class="dropdown-list">
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 1">
                                    White
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 2">
                                    Multicolor
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 3">
                                    Light Grey
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 4">
                                    Grey
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 5">
                                    Dark Grey
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 5">
                                    Pink
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 5">
                                    Orange
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="single-filter">
                        <div class="dropdown" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Sizes</label>
                            <div class="dropdown-list">
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 1">
                                    2XS
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 2">
                                    XS
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 3">
                                    S
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 4">
                                    M
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 5">
                                    L
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 5">
                                    XL
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 5">
                                    XXL
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="single-filter">
                        <div class="dropdown" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Print Areas</label>
                            <div class="dropdown-list">
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 1">
                                    All over print
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 2">
                                    Back side
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 3">
                                    Front side
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 4">
                                    Neck label inner
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 5">
                                    Neck label Outer
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="single-filter">
                        <div class="dropdown" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Fullfill Locations</label>
                            <div class="dropdown-list">
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 1">
                                    Australia
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 2">
                                    Canada
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 3">
                                    China
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 4">
                                    USA
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 5">
                                    England
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="single-filter">
                        <div class="dropdown" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Print Type</label>
                            <div class="dropdown-list">
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 1">
                                    Direct-to-Garment
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 2">
                                    Dye sublimation
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="single-filter">
                        <div class="dropdown" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Brands</label>
                            <div class="dropdown-list">
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 1">
                                    Anvil
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 2">
                                    AS Colour
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="single-filter">
                        <div class="dropdown" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Print Providers</label>
                            <div class="dropdown-list">
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 1">
                                    Awkward Styles
                                </label>
                                <label class="dropdown-option">
                                    <input type="checkbox" name="dropdown-group" value="Selection 2">
                                    Big Oven Tees
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">

                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
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
                        <div class="col-xl-4 col-lg-6 col-md-6">
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
                        <div class="col-xl-4 col-lg-6 col-md-6">
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
                        <div class="col-xl-4 col-lg-6 col-md-6">
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
                        <div class="col-xl-4 col-lg-6 col-md-6">
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
                        <div class="col-xl-4 col-lg-6 col-md-6">
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
                        <div class="col-xl-4 col-lg-6 col-md-6">
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
                        <div class="col-xl-4 col-lg-6 col-md-6">
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
                        <div class="col-xl-4 col-lg-6 col-md-6">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/jquery.min.js.download') }}"></script>
    <script src="{{ asset('js/popper.min.js.download') }}popper.min.js.download" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
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


            CheckboxDropdown.prototype.toggleOpen = function(forceOpen) {
                var _this = this;

                if (!this.isOpen || forceOpen) {
                    this.isOpen = true;
                    this.$el.addClass('on');
                    this.$el.find('.dropdown-content').stop(true, true).slideDown(500);
                    $(document).on('click', function(e) {
                        if (!$(e.target).closest('[data-control]').length) {
                            _this.toggleOpen();
                        }
                    });
                } else {
                    this.isOpen = false;
                    this.$el.removeClass('on');
                    this.$el.find('.dropdown-content').stop(true, true).slideUp('slow');
                    $(document).off('click');
                }
            };

            var checkboxesDropdowns = document.querySelectorAll('[data-control="checkbox-dropdown"]');
            for (var i = 0, length = checkboxesDropdowns.length; i < length; i++) {
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

    </script>
@endsection
