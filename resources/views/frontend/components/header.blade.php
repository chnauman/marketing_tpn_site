<!-- Header -->
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{url('')}}"><img src="{{ asset('images/logo.svg') }}" width="250" alt="The Print Nation" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="{{route('frontend.catalog')}}">Catalog</a>
                    <a class="nav-link" href="{{route('frontend.how_it_works')}}">How it Works</a>
                    <a class="nav-link" href="{{route('frontend.faq')}}">FAQs</a>
                    <a class="nav-link" href="{{route('frontend.blog')}}">Blog</a>
                    <a class="nav-link" href="{{route('frontend.privacy')}}">Privacy Policy</a>
                    <a class="nav-link" href="#">Help</a>
                </div>
                <div class="login-btn">
                    <a href="javascript:void(0)">Log in</a>
                </div>
            </div>
        </div>
    </nav>
</header>
