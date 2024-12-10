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
        <p class="font-weight-bold">[[APP NAME]] Privacy Policy</p>

        <p>[[APP NAME]]  "the App” provides [[DESCRIBE SERVICE APP PROVIDES]]  "the Service" to merchants who use Shopify to power their stores. This Privacy Policy describes how personal information is collected, used, and shared when you install or use the App in connection with your Shopify-supported store.</p>

        <p><strong>Personal Information the App Collects</strong></p>

        <p>When you install the App, we are automatically able to access certain types of information from your Shopify account:
            [[API LIST WITH BRIEF DESCRIPTIONS]]
        </p>

        <p>
            [[ADD IN DATA COLLECTED INDEPENDENTLY FROM SHOPIFY APIS --EXAMPLES BELOW]]
            Additionally, we collect the following types of personal information from you and/or your customers once you have installed the App:
            <ul>
                <li>Information about you and others who may access the App on behalf of your store, such as your name, address, email address, phone number, and billing information;</li>
                <li>Information about individuals who visit your store, such as their IP address, web browser details, time zone, and information about the cookies installed on the particular device.</li>
                <li>[[ADD ANY OTHER COLLECTED PERSONAL INFORMATION]]</li>
            </ul>
        </p>

        <p>
            We collect personal information directly from the relevant individual, through your Shopify account[[ADD IF RELEVANT]], or using the following technologies:
            <ul>
                <li>“Cookies” are data files that are placed on your device or computer and often include an anonymous unique identifier. For more information about cookies, and how to disable cookies, visit <a href="http://www.allaboutcookies.org">http://www.allaboutcookies.org</a>.</li>
                <li>“Log files” track actions occurring on the Site, and collect data including your IP address, browser type, Internet service provider, referring/exit pages, and date/time stamps.</li>
                <li>“Web beacons,” “tags,” and “pixels” are electronic files used to record information about how you browse the Site.</li>
                <li>[[INSERT DESCRIPTIONS OF OTHER TYPES OF TRACKING TECHNOLOGIES USED]]</li>
            </ul>
        </p>

        <p><strong>How Do We Use Your Personal Information?</strong></p>

        <p>
            We use the personal information we collect from you and your customers in order to provide the Service and to operate the App.
            [[ADD IF RELEVANT]] Additionally, we use this personal information to:
            <ul>
                <li>Communicate with you;</li>
                <li>Optimize or improve the App;</li>
                <li>Provide you with information or advertising relating to our products or services.</li>
                <li>[[INSERT OTHER USES OF INFORMATION, INCLUDING SPECIFIC REFERENCE TO BEHAVIOURAL/TARGETED ADVERTISING IF RELEVANT]]</li>
            </ul>
        </p>

        <p><strong>Sharing Your Personal Information</strong></p>

        <p>[[DESCRIBE THIRD PARTIES WITH WHOM YOU MAY SHARE PERSONAL INFORMATION YOU COLLECT]]</p>

        <p>Finally, we may also share your Personal Information to comply with applicable laws and regulations, to respond to a subpoena, search warrant, or other lawful request for information we receive, or to otherwise protect our rights.</p>

        <p><strong>Behavioural Advertising</strong><br />
            As described above, we use your Personal Information to provide you with targeted advertisements or marketing communications we believe may be of interest to you. For more information about how targeted advertising works, you can visit the Network Advertising Initiative’s (“NAI”) educational page at <a href="http://www.networkadvertising.org/understanding-online-advertising/how-does-it-work">here</a>.
        </p>

        <p>
            You can opt out of targeted advertising by:
            [[INCLUDE OPT-OUT LINKS FROM WHICHEVER SERVICES BEING USED. COMMON LINKS INCLUDE: FACEBOOK; GOOGLE; BING]]
            Additionally, you can opt out of some of these services by visiting the Digital Advertising Alliance’s opt-out portal at: <a href="http://optout.aboutads.info/">here</a>.
        </p>

        <p><strong>Your Rights</strong><br />
            If you are a European resident, you have the right to access personal information we hold about you and to ask that your personal information be corrected, updated, or deleted. If you would like to exercise this right, please contact us through the contact information below.
        </p>

        <p>
            Additionally, if you are a European resident we note that we are processing your information in order to fulfill contracts we might have with you (for example, if you make an order through the Site), or otherwise to pursue our legitimate business interests listed above. Additionally, please note that your information will be transferred outside of Europe, including to Canada and the United States.
        </p>

        <p>[[ADD IN INFORMATION ABOUT EU-U.S. PRIVACY SHIELD IF RELEVANT]]</p>

        <p><strong>Data Retention</strong><br />
            When you place an order through the Site, we will maintain your Order Information for our records [[DESCRIBE RETENTION PRACTICES]] unless and until you ask us to delete this information.
        </p>

        <p><strong>Changes</strong><br />
            We may update this privacy policy from time to time in order to reflect, for example, changes to our practices or for other operational, legal or regulatory reasons.
        </p>

        <p><strong>Contact Us</strong><br />
            For more information about our privacy practices, if you have questions, or if you would like to make a complaint, please contact us by e-mail at <a href="mailto:[[INSERT CONTACT EMAIL]]">[[INSERT CONTACT EMAIL]]</a> or by mail using the details provided below:
        </p>

        <p>[[INSERT PHYSICAL ADDRESS, AND DATA PROTECTION OFFICER CONTACT INFORMATION IF RELEVANT]]</p>
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
