@extends('frontend.layouts.main_layout')

@section('content')
<style>

    .faq a {
    color: #007bff;
    text-decoration: none;
}

.faq a:hover {
    text-decoration: underline;
}

/* Mobile Adjustments */
@media (max-width: 768px) {
    .sm-banner-content h1 {
        font-size: 28px;
    }
}

</style>
<section class="small-banner">
    <div class="container">
        <div class="sm-bannner-wrap">
            <div class="sm-banner-content">
                <h1>Privacy Policy</h1>
                <span></span>
            </div>
        </div>
    </div>
</section>
<section class="faq py-5">
    <div class="container">
        <p class="font-weight-bold">The Print Nation (TPN) Privacy Policy</p>

        <p>TPN "the App” provides print-on-demand services, designs, and product fulfillment to merchants who use Shopify to power their stores. This Privacy Policy describes how personal information is collected, used, and shared when you install or use the App in connection with your Shopify-supported store.</p>

        <p><strong>Personal Information the App Collects</strong></p>

        <p>
            We collect the following types of personal information from you and/or your customers once you have installed the App:
            <ul>
                <li>Information about you and others who may access the App on behalf of your store, such as your name, address, email address, phone number, and billing information;</li>
                <li>Information about individuals who visit your store, such as their IP address, web browser details, time zone, and information about the cookies installed on the particular device.</li>
            </ul>
        </p>

        <p><strong>How Do We Use Your Personal Information?</strong></p>

        <p>
            We use the personal information we collect from you and your customers in order to provide the Service and to operate the App.
            Additionally, we use this personal information to:
            <ul>
                <li>Communicate with you;</li>
                <li>Optimize or improve the App;</li>
                <li>Provide you with information or advertising relating to our products or services.</li>
            </ul>
        </p>

        <p><strong>Sharing Your Personal Information</strong></p>

        <p>We value your privacy and do not share any of your personal information with third parties. Your data is used solely to provide the services of the App and to enhance your experience with TPN. We are committed to keeping your information secure and confidential.</p>

        <p><strong>Behavioural Advertising</strong><br />
            We do not engage in behavioral advertising or targeted marketing. Your personal information is not used for the purpose of delivering tailored advertisements or marketing communications. We are committed to respecting your privacy and ensuring your data is not shared for such purposes.
        </p>

        <p><strong>Your Rights</strong><br />
        </p>

        <p>
            We are processing your information in order to fulfill contracts we might have with you (for example, if you make an order through the Site), or otherwise to pursue our legitimate business interests listed above. Additionally, please note that your information will be not be shared with anyone.
        </p>

        <p><strong>Data Retention</strong><br />
            When you place an order through the Site, we will maintain your Order Information for our records unless and until you ask us to delete this information.
        </p>

        <p><strong>Changes</strong><br />
            We may update this privacy policy from time to time in order to reflect, for example, changes to our practices or for other operational, legal or regulatory reasons.
        </p>

        <p><strong>Contact Us</strong><br />
            For more information about our privacy practices, if you have questions, or if you would like to make a complaint, please contact us by e-mail at <a href="mailto:support@theprintnation.com">support@theprintnation.com</a> or by mail using the details provided below:
        </p>

        <p>fahahd al salem kuwait city
        kuwait building 22 floor</p>
    </div>
</section>

<!-- Custom Solution Section at the End -->
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
