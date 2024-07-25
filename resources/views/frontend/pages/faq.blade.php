@extends('frontend.layouts.main_layout')
@section('content')
    <!-- Small Banner -->
    <section class="small-banner">
        <div class="container">
            <div class="sm-bannner-wrap">
                <div class="sm-banner-content">
                    <h1>Choose the Perfect Plan for your Business.</h1>
                    <span></span>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq">
        <div class="container">
            <h3>Frequently Asked <b>Questions.</b></h3>

            <div class="accordion" id="customAccordion">

                @foreach($faqQuestions as $item)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            {{$item->question}}
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#customAccordion">
                        <div class="accordion-body">
                            {{$item->answer}}
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Want a custom solution? -->
    <section class="custom-solution">
        <div class="container">
            <div class="solution-wrapper">
                <div>
                    <h2>Found what you were Searching for?</h2>
                    <p class="text-white">Then get it right now!</p>
                </div>
                <div class="common-btns m-0">
                    <a href="javascript:void(0)"><p>Start Selling</p></a>
                </div>
            </div>
        </div>
    </section>
@endsection
