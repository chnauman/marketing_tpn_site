<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-column">
                    <h5>Integrations</h5>
                    <ul>
                        <li><a href="javascript:void(0)">Shopify</a></li>
                        <li><a href="javascript:void(0)">Etsy</a></li>
                        <li><a href="javascript:void(0)">eBay</a></li>
                        <li><a href="javascript:void(0)">Prestashop</a></li>
                        <li><a href="javascript:void(0)">BigCommerce</a></li>
                        <li><a href="javascript:void(0)">WIX</a></li>
                        <li><a href="javascript:void(0)">WooCommerce</a></li>
                        <li><a href="javascript:void(0)">The Print Nation API</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-column">
                    <h5>Discover</h5>
                    <ul>
                        <li><a href="javascript:void(0)">Blog</a></li>
                        <li><a href="javascript:void(0)">Guides</a></li>
                        <li><a href="javascript:void(0)">Products</a></li>
                        <li><a href="javascript:void(0)">Brands</a></li>
                        <li><a href="javascript:void(0)">Pricing</a></li>
                        <li><a href="javascript:void(0)">Shipping rates</a></li>
                        <li><a href="javascript:void(0)">Mockup Machine</a></li>
                        <li><a href="javascript:void(0)">Ecommerce Statistics</a></li>
                        <li><a href="javascript:void(0)"></a>Promotions</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-column">
                    <h5>Start Selling</h5>
                    <ul>
                        <li><a href="javascript:void(0)">Sell on Etsy</a></li>
                        <li><a href="javascript:void(0)">Sell on Shopify</a></li>
                        <li><a href="javascript:void(0)">Sell on WIX</a></li>
                        <li><a href="javascript:void(0)">Custom Products</a></li>
                        <li><a href="javascript:void(0)">Fulfillment status</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-column">
                    <h5>The Print Nation</h5>
                    <ul>
                        <li><a href="javascript:void(0)">Print on Demand</a></li>
                        <li><a href="javascript:void(0)">Print Providers</a></li>
                        <li><a href="javascript:void(0)">Become a Print Provider</a></li>
                        <li><a href="javascript:void(0)">About</a></li>
                        <li><a href="javascript:void(0)">Jobs</a></li>
                        <li><a href="javascript:void(0)">Contacts</a></li>
                        <li><a href="javascript:void(0)">Merchant Protection</a></li>
                        <li><a href="javascript:void(0)">Affiliate</a></li>
                        <li><a href="javascript:void(0)">Contact Sales</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="social-media">
            <a href="javascript:void(0)"><img src="{{ asset('images/facebook.svg') }}" alt="FB" class="img-fluid"></a>
            <a href="javascript:void(0)"><img src="{{ asset('images/linkedin.svg') }}" alt="Linkedin" class="img-fluid"></a>
            <a href="javascript:void(0)"><img src="{{ asset('images/gmail.svg') }}" alt="Gmail" class="img-fluid"></a>
            <a href="javascript:void(0)"><img src="{{ asset('images/twitter.svg') }}" alt="X" class="img-fluid"></a>
        </div>
    </div>
</footer>

<script src="{{ asset('js/jquery.min.js.download') }}"></script>
<script src="{{ asset('js/popper.min.js.download') }}" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="{{ asset('js/bootstrap.min.js.download') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js.download') }}"></script>
<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            navText: ['<img src="{{ asset('images/carousel-arrow-left.svg') }}" alt="Arrow Left">', '<img src="{{ asset('images/carousel-arrow-right.svg') }}" alt="Arrow Right">'],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3.5
                }
            }
        });
    });

</script>
