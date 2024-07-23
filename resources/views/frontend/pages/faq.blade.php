@extends('layouts.main_layout')
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
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Do I Need to Pay to use TPN?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#customAccordion">
                        <div class="accordion-body">
                            No, you can use TPN for free.  You can integrate TPN with your store and publish as many designs as you want.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Will I lose some features if I downgrade from Premium to the Free plan?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#customAccordion">
                        <div class="accordion-body">
                            Answer to question 2.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How can I pay?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#customAccordion">
                        <div class="accordion-body">
                            Answer to question 3.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            What is the Enterprise plan?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#customAccordion">
                        <div class="accordion-body">
                            Answer to question 4.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Can I cancel the Premium plan at any time?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#customAccordion">
                        <div class="accordion-body">
                            Answer to question 5.
                        </div>
                    </div>
                </div>
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
