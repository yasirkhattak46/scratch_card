@extends('survey.layout')
@section('content')
    <div class="headermain">
        <div class="logodev">
            <img class="headerlogo" src="{{asset('assets/images/logo1.png')}}" alt="">
            <img class="headerlogo2" src="{{asset('assets/images/logo2.svg')}}" alt="">
        </div>
        <div class="">
            <img class="" width="100%" src="{{asset('assets/images/mainheading.png')}}" alt="">
        </div>
        <div class="">
            <img class="m-auto d-block" width="10%" src="{{asset('assets/images/arrowdown.gif')}}" alt="">
        </div>
        <div class="container">
            <section>
                <div class="survey_dev pb-4">
                    <div class="status">
                        <div class="statusbar" style="width:    8px"></div>
                    </div>
                    <div class="survey_steps">
                        <div class="step_one ">
                            @include('survey.step_one')
                        </div>
                        <div class="step_two" style="display: none">
                            @include('survey.step_two')
                        </div>
                        <div class="step_three" style="display: none">
                            @include('survey.step_three')
                        </div>
                        <div class="step_four" style="display: none">
                            @include('survey.step_four')
                        </div>
                        <div class="step_five" style="display: none">
                            @include('survey.step_five')
                        </div>
                        <div class="step_six" style="display: none">
                            @include('survey.step_six')
                        </div>
                        <div class="step_seven" style="display: none">
                            @include('survey.step_seven')
                        </div>
                        <div class="specialoffer" style="display: none">
                            @include('quiz.specialoffer')
                        </div>
                        <div class="credit_score" style="display: none">
                            @include('quiz.credit_score')
                        </div>
                        <div class="type_of_home" style="display: none">
                            @include('quiz.type_of_home')
                        </div>
                        <div class="what_address" style="display: none">
                            @include('quiz.what_address',$states)
                        </div>
                        <div class="electric_provider" style="display: none">
                            @include('quiz.electric_provider')
                        </div>
                        <div class="roof_type" style="display: none">
                            @include('quiz.roof_type')
                        </div>
                        <div class="trim_trees" style="display: none">
                            @include('quiz.trim_trees')
                        </div>
                        <div class="thanks" id="thanks" style="display: none">
                            @include('quiz.thanks')
                        </div>
                        <div class="unqualify" style="display: none">
                            @include('quiz.unqualify')
                        </div>
                    </div>
                </div>
            </section>

            <section class="footersection">
                <div></div>
                <h1 class="surveytitle text-white pt-5 pb-3 text-center">Complete the Survey Above to Qualify For:</h1>
                <div class=" d-flex justify-content-between">
                    <img width="50%" src="{{asset('assets/images/completesystem.png')}}">
                    <img width="50%" src="{{asset('assets/images/fedraltax.png')}}">
                </div>
                <div class="footercontent pt-5">
                    <small style="color: #869ab8 ;font-size: 12px;">¹ Available with approved credit. Must be 18+ /
                        homeowner. Contact us for additional details. | ² To qualify, you must have federal income tax
                        liability at least equal to the value of the tax credit. We make no guarantees regarding
                        eligibility for any tax credits. We do not provide tax advice. Contact your personal tax advisor
                        for eligibility requirements.</small>
                    <div class="d-flex justify-content-between py-3">
                        <small><a style="color: #869ab8 ;font-size: 12px;" href="#privacy_policy" data-bs-toggle="modal"
                                  data-bs-target="#privacy_policy">Terms & Conditions / Privacy Policy</a></small>
                        <small style="color: #869ab8 ;font-size: 12px;">© 2023 GC-Solar.com. All Rights
                            Reserved.</small>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="privacy_policy" tabindex="-1" aria-labelledby="privacy_policy" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="privacy_policy">TERMS & CONDITIONS/PRIVACY POLICY</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;background:white;'><span
                            style="font-size:60px;font-family:Raleway;color:black;">Privacy Policy</span></p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;background:white;'>
                        <strong><span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>This privacy policy discloses the privacy practices for www.gc-solar.com. This privacy policy applies solely to information collected by this website. It will notify you of the following:</span></strong>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;background:white;'><span
                            style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>&nbsp;</span></p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>1. What personally identifiable information is collected from you through the website, how it is used and with whom it may be shared.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>2. What choices are available to you regarding the use of your data.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>3. The security procedures in place to protect the misuse of your information.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>4. How you can correct any inaccuracies in the information.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:7.5pt;background:white;'>
                        <span style="font-size:48px;font-family:Raleway;color:black;">Your Access to and Control Over Information</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>You may opt out of any future contacts from us at any time. You can do the following at any time by contacting us via the email address or phone number given on our website:</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>1. See what data we have about you, if any.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>2. Change/correct any data we have about you.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>3. Have us delete any data we have about you.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>4. Express any concern you have about our use of your data.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:7.5pt;background:white;'>
                        <span style="font-size:48px;font-family:Raleway;color:black;">Security</span></p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>We take precautions to protect your information. When you submit sensitive information via the website, your information is protected both online and offline.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>While we use encryption to protect sensitive information transmitted online, we also protect your information offline. Only employees who need the information to perform a specific job (for example, billing or customer service) are granted access to personally identifiable information.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>The computers/servers in which we store personally identifiable information are kept in a secure environment.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:7.5pt;background:white;'>
                        <span style="font-size:48px;font-family:Raleway;color:black;">Links</span></p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>This web site contains links to other sites. Please be aware that we are not responsible for the content or privacy practices of such other sites. We encourage our users to be aware when they leave our site and to read the privacy statements of any other site that collects personally identifiable information.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:7.5pt;background:white;'>
                        <span style="font-size:48px;font-family:Raleway;color:black;">Cookies</span></p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>We use &ldquo;cookies&rdquo; on this site. A cookie is a piece of data stored on a site visitor&rsquo;s hard drive to help us improve your access to our site and identify repeat visitors to our site. For instance, when we use a cookie to identify you, you would not have to log in a password more than once, thereby saving time while on our site. Cookies can also enable us to track and target the interests of our users to enhance the experience on our site. Usage of a cookie is in no way linked to any personally identifiable information on our site.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>Some of our business partners may use cookies on our site (for example, advertisers). However, we have no access to or control over these cookies.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:7.5pt;background:white;'>
                        <span style="font-size:48px;font-family:Raleway;color:black;">HOW WE USE YOUR INFORMATION</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;background:white;'>
                        <strong><span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>A. Information Use By or For Us</span></strong>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>We may use the information we collect from and about you for any of the following purposes:</span>
                    </p>
                    <ul style="margin-bottom:0in;margin-top:0in;" type="disc">
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <span style='font-size:18px;font-family:"Open Sans",sans-serif;'>To respond to your inquiries, and provide the services and information you request;</span>
                        </li>
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <span style='font-size:18px;font-family:"Open Sans",sans-serif;'>To analyze, improve, operate, and maintain the Site, our programs, services, website, and other systems, and to develop new products and services;</span>
                        </li>
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <span style='font-size:18px;font-family:"Open Sans",sans-serif;'>To tailor or enhance your user experience, including as a way to recognize and welcome you to the Site, and to provide customized Site content, targeted offers, and advertising on the Site, or across other third-party websites, mobile applications, social media, or online services, or via email;</span>
                        </li>
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <span style='font-size:18px;font-family:"Open Sans",sans-serif;'>To maintain a record of our interactions with you;</span>
                        </li>
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <span style='font-size:18px;font-family:"Open Sans",sans-serif;'>To contact you via direct mail, email and/or telemarketing regarding offers, contests, events, news, programs, and other retail opportunities from us and/or selected third parties that we believe may be of interest to you;</span>
                        </li>
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <span style='font-size:18px;font-family:"Open Sans",sans-serif;'>To use your data in an aggregated non-specific format for analytical and demographic purposes;</span>
                        </li>
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <span style='font-size:18px;font-family:"Open Sans",sans-serif;'>To address problems with the Site or our business;</span>
                        </li>
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <span style='font-size:18px;font-family:"Open Sans",sans-serif;'>To protect the security or integrity of the Site and our business, such as by protecting against and preventing fraud, unauthorized transactions, claims and other liabilities, and managing risk exposure, including by identifying potential hackers and other unauthorized users;</span>
                        </li>
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <span style='font-size:18px;font-family:"Open Sans",sans-serif;'>To comply with our legal obligations; and</span>
                        </li>
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <span style='font-size:18px;font-family:"Open Sans",sans-serif;'>As otherwise described to you at the point of data collection.</span>
                        </li>
                    </ul>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;background:white;'><span
                            style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>Additionally, if you use the Site to connect with third party services you authorize us to use information from and about you, on your behalf, to interact with these third-party services based on your requests. This site is being monitored by one or more third-party monitoring software(s), and may capture information about your visit that will help us improve the quality of our service.&nbsp;</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;background:white;'><span
                            style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>&nbsp;</span></p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;background:white;'>
                        <strong><span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>B. How We Use Your Information for Interest-Based Advertising</span></strong>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>We may use third parties to measure and target advertisements for us about our products and services that are tailored to your online interests. We allow these third-party companies to use cookies, web beacons, pixel tags and similar technologies to collect certain data and other information about your online activity. This information is used to display advertisements for us on the Site or across other websites, mobile applications, social media or online services that you use.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>We also may display interest-based ads through Facebook, Twitter, or other social media platforms or websites. This is done through the Facebook Custom Audiences, Twitter Tailor Audiences, or other similar business tools. These tools allow us to personalize our ads based on your shopping experience with us, without having to share your personal information with these social media platforms. We do this only by sharing hashed information (which converts your email or phone number to a unique string of numbers and letters) that the social media platform then matches data against its own data for the limited purpose of serving advertisements (either directly to you or to other lookalike audiences). The matched and unmatched hashes are then deleted and are not used for any other purpose.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>For information on your choices with respect to interest-based ads, see the &ldquo;Interest Based Advertising Choices&rdquo; section below.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:7.5pt;background:white;'>
                        <span
                            style="font-size:48px;font-family:Raleway;color:black;">HOW WE SHARE YOUR INFORMATION</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>We may share or disclose the information we collect from and about you as described below.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;background:white;'>
                        <strong><span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>A. Sharing of Information by You</span></strong>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>The Site offer many ways to find, enjoy, and share content. Your activity in connection with the Site may include filling out surveys, reviewing and rating products or services, inquiring about or purchasing products or services, participation in online communities, &ldquo;liking&rdquo; or &ldquo;sharing&rdquo; our content to your social media accounts or pages or otherwise interacting with the Site. Any information you may disclose on our Site, in blogs, on message boards, in chat rooms, or on other public areas on the Site or other third-party websites, applications, or services that this Site may link to, becomes public information. Please exercise caution when disclosing personal information in these public areas.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;background:white;'>
                        <strong><span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>B. Sharing of Information by Us</span></strong>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>We may share or disclosure your personal information as follows:</span>
                    </p>
                    <ul style="margin-bottom:0in;margin-top:0in;" type="disc">
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <strong><span style='font-size:18px;font-family:"Open Sans",sans-serif;'>Affiliate Companies or Subsidiaries:</span></strong><span
                                style='font-size:18px;font-family:"Open Sans",sans-serif;'>&nbsp;We may share your information with any parent company or any subsidiaries, joint venture partners, or other companies that we control or are under common control with us.</span>
                        </li>
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <strong><span style='font-size:18px;font-family:"Open Sans",sans-serif;'>Selling Personal Information:</span></strong><span
                                style='font-size:18px;font-family:"Open Sans",sans-serif;'>&nbsp;We are a solar installation company and may sell personal information about our users and visitors to third parties, such as, without limitation, solar energy providers and energy efficiency consultants/auditors. When you request a solar consultation or quote, or otherwise request that clean energy service providers contact you, we may sell, disclose, or otherwise share your information to solar energy providers, clean energy service providers or other third party service providers not affiliated with us. The third parties that purchase or receive your information from us may then (i) use your personal information for their own purposes (including for commercial purposes), (ii) contact you regarding their products and services, and/or (iii) further disclose your personal information to other third parties for their own commercial purposes.</span>
                        </li>
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <strong><span style='font-size:18px;font-family:"Open Sans",sans-serif;'>Marketing Partners and Other Third Parties:</span></strong><span
                                style='font-size:18px;font-family:"Open Sans",sans-serif;'>&nbsp;We may share your information with our marketing partners or other third parties to bring selected retail opportunities, offers, contests, programs, events or news to you via direct mail, email and/or telemarketing. You may have no relationship with these other companies. We are not responsible for the content of any third party communications sent to you and you will need to opt out of those communications separately, if desired.</span>
                        </li>
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <strong><span
                                    style='font-size:18px;font-family:"Open Sans",sans-serif;'>Service Providers:</span></strong><span
                                style='font-size:18px;font-family:"Open Sans",sans-serif;'>&nbsp;We may share your information with our third party service providers that provide business, professional or technical support functions for us, including to the extent necessary or desirable to help run promotions, fulfill orders, complete your transaction, or provide customer service. These service providers may have access to personal information about our site visitors if it is needed to perform their functions for us, but they are not authorized by us to use or disclose the information, except as necessary to perform services on our behalf or to comply with legal requirements.</span>
                        </li>
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <strong><span style='font-size:18px;font-family:"Open Sans",sans-serif;'>Legal Matters; Safety:</span></strong><span
                                style='font-size:18px;font-family:"Open Sans",sans-serif;'>&nbsp;We may access and disclose your information to respond to judicial process or provide information to law enforcement or regulatory agencies or in connection with an investigation on matters related to public safety, as permitted by law, or otherwise as required by law. We also may disclose your information as necessary, if we believe that there has been a violation of our Terms of Use, or if it is in our interest to protect our property or other legal rights (including, but not limited to, enforcement of our agreements) or the rights or property of any third party.</span>
                        </li>
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <strong><span style='font-size:18px;font-family:"Open Sans",sans-serif;'>Sale or Transfer of Business or Assets:</span></strong><span
                                style='font-size:18px;font-family:"Open Sans",sans-serif;'>&nbsp;Information about our users, including personal information, may be disclosed and/or sold as part of any merger, acquisition, debt financing, sale of company assets, or similar transaction by us, as well as in the event of an insolvency, bankruptcy or receivership in which personal information could be transferred and/or sold to third parties as one of our business assets.</span>
                        </li>
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <strong><span style='font-size:18px;font-family:"Open Sans",sans-serif;'>Aggregate or Anonymous Non-Personal Information:</span></strong><span
                                style='font-size:18px;font-family:"Open Sans",sans-serif;'>&nbsp;We may share aggregate, anonymous, or de-identified non-personal information with third parties for their marketing or analytics uses.</span>
                        </li>
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <span style='font-size:18px;font-family:"Open Sans",sans-serif;'>Other: We may share your information as described to you at the point of collection.</span>
                        </li>
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <span style='font-size:18px;font-family:"Open Sans",sans-serif;'>&nbsp;</span></li>
                    </ul>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:7.5pt;background:white;'>
                        <span style="font-size:48px;font-family:Raleway;color:black;">SPECIAL NOTICE TO CALIFORNIA RESIDENTS</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>California residents may also take advantage of the following rights:</span>
                    </p>
                    <ul style="margin-bottom:0in;margin-top:0in;" type="disc">
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <span style='font-size:18px;font-family:"Open Sans",sans-serif;'>You may request, up to two times each year, that we disclose to you the categories and specific pieces of personal information that we have collected about you, the categories of sources from which your personal information is collected, the business or commercial purpose for collecting your personal information, the categories of personal information that we disclosed for a business purpose, any categories of personal information that we sold about you, the categories of third parties with whom we have shared your personal information, and the business or commercial purpose for selling your personal information, if applicable.</span>
                        </li>
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <span style='font-size:18px;font-family:"Open Sans",sans-serif;'>You may request that we delete any personal information that we have collected from or about you. Note that there are some reasons we will not be able to fully address your request, such as if we need to complete a transaction for you, to detect and protect against fraudulent and illegal activity, to exercise our rights, or to comply with a legal obligation.</span>
                        </li>
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <span style='font-size:18px;font-family:"Open Sans",sans-serif;'>You may request to opt out of Momentum Solar&rsquo;s sale of your personal information to third parties, and to our affiliated companies that do not share the same brand name, for their direct marketing purposes. This means that, if you opt out, going forward, we will not share your information with such third parties to use for their purposes unless you later direct us to do so. To effect the opt out, please click on the<br>&nbsp;</span><a
                                href="https://momentumsolar.com/request-quote/"><span
                                    style='font-size:18px;font-family:"Open Sans",sans-serif;color:#0149FF;'>Do Not Sell My Info link</span></a>
                        </li>
                    </ul>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-left:.5in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>&nbsp;</span></p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>For purposes of compliance with the California Consumer Privacy Act, in addition to the further details as described throughout this Privacy Policy, we make the following disclosures:</span>
                    </p>
                    <ul style="margin-bottom:0in;margin-top:0in;" type="disc">
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <span style='font-size:18px;font-family:"Open Sans",sans-serif;'>We collect the following categories of personal information: Identifiers/Contact Information (like your transaction history and service usage), Commercial information, Internet or other electronic network activity information, geolocation, visual and audio information, and profiles and inferences drawn from the above.</span>
                        </li>
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <span style='font-size:18px;font-family:"Open Sans",sans-serif;'>We sell the following categories of personal information: Identifiers/Contact Information, Internet or other electronic network activity information, and inferences drawn from the above. We have sold these categories of information in the preceding 12 months.</span>
                        </li>
                        <li style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;color:black;background:white;'>
                            <span style='font-size:18px;font-family:"Open Sans",sans-serif;'>We disclose the following categories of personal information for a business or commercial purpose: Identifiers/Contact Information, Commercial information, Internet or other electronic network activity information, geolocation, visual and audio information, and inferences drawn from above.</span>
                        </li>
                    </ul>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-left:.5in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>&nbsp;</span></p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:7.5pt;background:white;'>
                        <span style="font-size:48px;font-family:Raleway;color:black;">Updates</span></p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>Our Privacy Policy may change from time to time and all updates will be posted on this page.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:7.5pt;background:white;'>
                        <span style="font-size:48px;font-family:Raleway;color:black;">Surveys &amp; Contests</span></p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>From time-to-time our site requests information via surveys or contests. Participation in these surveys or contests is completely voluntary and you may choose whether or not to participate and therefore disclose this information. Information requested may include contact information (such as name and shipping address), and demographic information (such as zip code, age level). Contact information will be used to notify the winners and award prizes. Survey information will be used for purposes of monitoring or improving the use and satisfaction of this site.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:7.5pt;background:white;'>
                        <span style="font-size:48px;font-family:Raleway;color:black;">Sharing</span></p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>We share aggregated demographic information with our partners. This is not linked to any personal information that can identify any individual person.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>We partner with another party to provide specific services. When the user signs up for these services, we will share names, or other contact information that is necessary for the third party to provide these services. These parties are not allowed to use personally identifiable information except for the purpose of providing these services.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:7.5pt;background:white;'>
                        <span style="font-size:48px;font-family:Raleway;color:black;">Terms &amp; Conditions</span></p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>This website is made up of various web pages, files and services that are made available for your use in learning about solar power. You are not required to provide any information on this website. If you are interested, you have the option of providing information which will be made available to businesses that are in the process of selling, installing and implementing solar power systems and one of those businesses may contact you. That is your choice. This Agreement governs your use of this website. The terms and conditions on this website may be changed at any time and you should periodically check to see if changes have been made. By using this website, you agree that you will be bound by these Website Terms and Conditions that are in affect when you use this website.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>You acknowledge that the content on this website is protected by copyrights, trademarks, trade secrets and/or other rights established by statute and/or by common law. We and/or our suppliers own all such content. You may not copy, modify, remove, delete, augment, add to, publish, transmit or otherwise create derivative works from the content on this website. You may print or save a single copy of materials from this website for your personal use. Personal use does not include posting such content on your website, blog or other publicly accessible communications or forums.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>This website is intended for use by adults. Individuals under the age of eighteen (18) are permitted to use the website only under the supervision of and with the consent of a parent and/or legal guardian. We do not knowingly collect or solicit information from children under the age of thirteen (13) (each a &ldquo;Minor&rdquo;) or allow such persons to submit information to this website. Should it come to our attention that a user is a Minor and has submitted information to this website, we will remove the information as soon as we are able to do so. If you are a parent or guardian and believe that a Minor for whom you are responsible has submitted personal information to this website, contact us at&nbsp;privacy@momentumsolar.com</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>YOU ACKNOWLEDGE AND AGREE THAT THIS WEBSITE AND THE CONTENTS HEREIN ARE PROVIDED ON AN &ldquo;AS IS&rdquo;, &ldquo;AS AVAILABLE&rdquo; BASIS AND THAT NO REPRESENTATIONS, ENDORSEMENTS, GUARANTEES, OR WARRANTIES, EXPRESS OR IMPLIED, REGARDING THE WEBSITE OR ITS CONTENTS ARE MADE, INCLUDING, WITHOUT LIMITATION, ANY REPRESENTATIONS, ENDORSEMENTS, GUARANTEES, OR WARRANTIES, EXPRESS OR IMPLIED, (A) OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE, AND NON-INFRINGEMENT OF INTELLECTUAL PROPERTY RIGHTS; (B) ARISING FROM COURSE OF DEALING, COURSE OF USAGE, OR COURSE OF PERFORMANCE; (C) OF TIMELINESS, ACCURACY, RELIABILITY OR CONTENT OF THE WEBSITE AND ANY INFORMATION PROVIDED THROUGH THE WEBSITE UNDER THIS AGREEMENT; OR (D) AS TO THE OPERATION OF THE SITE OR THE INFORMATION, CONTENT, MATERIALS, LINKS INCLUDED ON THE SITE. YOU EXPRESSLY AGREE THAT YOUR USE OF THE SITE IS AT YOUR SOLE RISK. THE INFORMATION ON THIS WEBSITE IS NOT INTENDED TO PROVIDE FINANCIAL, LEGAL, ACCOUNTING OR TAX ADVICE, AND SHOULD NOT BE RELIED UPON IN THAT REGARD. YOU SPECIFICALLY AGREE THAT THIS WEBSITE AND ITS OPERATORS SHALL NOT BE RESPONSIBLE FOR UNAUTHORIZED ACCESS TO INFORMATION THAT YOU SUBMIT THROUGH THIS WEBSITE OR ANY MATERIAL OR DATA SENT OR RECEIVED OR NOT SENT OR RECEIVED.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>TO THE FULL EXTENT PERMISSIBLE BY APPLICABLE LAW, THIS WEBSITE AND ITS OPERATORS DISCLAIM ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE. THIS WEBSITE AND ITS OPERATORS DO NOT WARRANT THAT THE SITE, ITS SERVERS, OR E-MAIL SENT FROM OR THROUGH THIS WEBSITE ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS. THIS WEBSITE AND ITS OPERATORS WILL NOT BE LIABLE UNDER ANY CIRCUMSTANCES EXCEPT FOR WILLFUL MISCONDUCT FOR ANY DAMAGES OF ANY KIND ARISING FROM THE USE OF THE SITE, INCLUDING, BUT NOT LIMITED TO DIRECT, INDIRECT, INCIDENTAL, PUNITIVE, AND CONSEQUENTIAL DAMAGES.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>CERTAIN STATE LAWS DO NOT ALLOW LIMITATIONS ON IMPLIED WARRANTIES OR THE EXCLUSION OR LIMITATION OF CERTAIN DAMAGES. IF THESE LAWS APPLY TO YOU, SOME OR ALL OF THE ABOVE DISCLAIMERS, EXCLUSIONS, OR LIMITATIONS MAY NOT APPLY TO YOU, AND YOU MIGHT HAVE ADDITIONAL RIGHTS. UNDER NO CIRCUMSTANCES SHALL THE LIABILITY OF THIS WEBSITE OR ITS OPERATOR EXCEED ONE THOUSAND DOLLARS ($1,000.00), REGARDLESS OF WHETHER THE CLAIM IS BROUGHT IN TORT, CONTRACT OR OTHER LEGAL THEORY.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>IF YOU ARE DISSATISFIED WITH ANY PORTION OF THE SITE OR SERVICES PROVIDED AS A RESULT OF USING A LINK ON THIS WEBSITE OR AS A RESULT OF BEING CONTACTED BY A BUSINESS AS A RESULT OF INFORMATION YOU PROVIDE ON THIS WEBISTE OR WITH ANY OF THESE TERMS OF USE, YOUR SOLE AND EXCLUSIVE REMEDY IS TO DISCONTINUE USING THE SITE/SERVICES.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>The laws of the state of New Jersey, without regard to principles of conflict of laws, govern this Agreement and any dispute of any sort that might arise between you, this website and/or the operators of this website. This website collects personal information from you which will primarily consist of contact information (&ldquo;Personal Information&rdquo;). You do not have to supply the Personal Information to use the website. The website also collects aggregate statistical information regarding visitors to enable it to make adjustments and changes to the website to better serve the needs of our visitors. This collection of statistical information does not require you to do anything and is not personally identifiable. The only way to avoid the collection of statistical information is to not use the website. You have the option of requesting a quote. If you do so, the Personal Information that you provide to us (including information regarding the property on which you are considering adding a solar system) may be shared with third parties to enable them to determine whether they can assist you. Such third parties will abide by the limitations contained herein with regard to the use of your Personal Information and we will not share your Personal Information with anyone else. Such third parties will make their decision based on the Personal Information you supply and may also consult publicly available information to verify information that you supply. You are responsible for the accuracy, quality, integrity, and reliability of the information that you supply to this website. If you provide any information that is untrue, not current, or incomplete or we suspect that there is such an issue with the information that you supplied, we reserve the right to refuse to allow you to use our services in the future. You may request that we correct or remove your Personal Information from the personal information we collect by sending an email to&nbsp;info@gc-solar.com&nbsp;and requesting the removal or correction of information.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>KNOWINGLY SUBMITTING FALSE OR MISLEADING INFORMATION OR INFORMATION AS TO SOMEONE OTHER THAN YOURSELF MAY CONSTITUTE CIVIL OR CRIMINAL OFFENSE AND MAY SUBJECT YOU TO DAMAGES, FINES AND/OR OTHER PENALTIES FOR SUCH ACTIONS. YOU AGREE TO INDEMNIFY AND HOLD THIS WEBSITE, ITS OPERATOR AND ANY THIRD PARTY THAT IS SUPPLIED WITH THE INFORMATION YOU PROVIDED HARMLESS FOR ANY DAMAGES CAUSED BY SUCH FALSE OR MISLEADING INFORMATION INCLUDING BUT NOT LIMITED TO ATTORNEYS&rsquo; FEES AND COSTS. YOU FURTHER AGREE TO INDEMNIFY AND HOLD HARMLESS THIS WEBSITE AND ITS OPERATOR FROM AND AGAINST ANY CLAIM OR DEMAND, INCLUDING BUT NOT LIMITED TO ATTORNEYS&rsquo; FEES, MADE BY ANY THIRD PARTY DUE TO OR ARISING OUT OF YOUR USE OF THIS WEBSITE, BREACH OF THESE TERMS AND CONDITIONS OR YOUR VIOLATION OF ANY LAW OR THE RIGHTS OF ANY THIRD PARTY.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>To the extent that this website requires you to create a user identification code and/or password for the submission of information to this website, you are responsible for keeping both such user identification code and password confidential. If you supply an email address, you agree that you will keep the email address current and accurate. We respect your privacy. This website and its operator will take commercially reasonable steps to protect the privacy and confidentiality of information that you supply to this website for the purpose of obtaining a quote.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;margin-bottom:.25in;background:white;'>
                        <span style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>Only a very limited number of individuals ever have access to your personal information. Primarily this information is accessed to provide you with a quote. We may use contractors or third parties to provide some of the services. If we need to disclose personal information for them to provide the services, it is with the requirement that the information is kept confidential, is not otherwise disseminated, and is used only to provide us with those services.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;background:white;'><span
                            style='font-size:18px;font-family:"Open Sans",sans-serif;color:black;'>The Digital Millennium Copyright Act of 1998 (&ldquo;DMCA&rdquo;) provides copyright owners with recourse in situations where the owners believe that content appearing on the internet infringes such owner&rsquo;s rights under United States Copyright Law. If, in good faith, you believe that content contained on this website infringes your copyright, you may send notice to us at the address provided below and request that the infringing material be removed. The notice you send must include (i) identification of the work that is allegedly infringed, (ii) specific identification of the material on this website that is alleged to be infringing, (iii) your name, address, phone number and email address so that we may respond to you; (iv) if you are not the copyright owner, contact information for the copyright owner so that we can confirm that you have the right to act for the copyright owner including a statement under penalty of perjury that you are authorized to act for the copyright owner; (v) a statement that the information contained in the notice is accurate and (vi) your physical or electronic signature. Any such notice should be sent by email to&nbsp;privacy@momentumsolar.com.</span>
                    </p>
                    <p style='margin:0in;font-size:16px;font-family:"Calibri",sans-serif;'>&nbsp;</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('footer_scripts')




    <script>
        window.addEventListener('unload', function (event) {
            localStorage.removeItem('survey')
        });


        // none = which should be display none;
        // block mean which section now should show
        // key are the column name in database
        // value are the value of that column
        function steps(none, block, obj, obj2) {
            // Validation
            for (var key in obj) {
                if (obj[key] === "") {
                    swal("Failure", key + ' is Required', "error");
                    return;
                }
            }

            if (localStorage.getItem('survey') == null) {
                localStorage.setItem('survey', '[]');
            }
            // get data From Local Storage
            var localdata = JSON.parse(localStorage.getItem('survey'));

            // Get Provider Against Zip Code
            if (obj.hasOwnProperty('address')) {
                fbq('trackCustom', 'Address', {address: obj.address});
                ajax_request(localdata[4].zip_code, 'address');
            }
            if (obj.hasOwnProperty('email')) {
                fbq('trackCustom', 'Email', {email: obj.email});
            }
            if (obj.hasOwnProperty('phone')) {
                fbq('trackCustom', 'Phone', {phone: obj.phone});
            }

            // Get States From Zip code
            if (obj.hasOwnProperty('zip_code')) {

                let length = parseInt(obj?.zip_code?.length);
                if ((obj?.zip_code === '') || (length !== 5)) {
                    swal("Failure", "Zip Code is invalid!", "error");
                    return;
                }
                ajax_request(obj.zip_code);
                fbq('trackCustom', 'Zipcode', {zipcode: obj.zip_code});
            }


            // Push New Object in Array
            if (obj2) {
                if (obj2?.last_name === '') {
                    swal("Failure", "Last Name is Required", "error");
                    return;
                }
                if (obj2?.state === 'Select your State') {
                    swal("Failure", "State is Required", "error");
                    return;
                }
                fbq('trackCustom', 'f_name', {f_name: obj.first_name});
                fbq('trackCustom', 'l_name', {l_name: obj.last_name});
                localdata.push(obj, obj2);
            } else {
                localdata.push(obj);
            }
            // set Again data in Local Storage
            localStorage.setItem('survey', JSON.stringify(localdata));

            // Status bar
            $(".statusbar").width($(".statusbar").width() + 80);

            // submit lead
            if (block === 'thanks') {
                const completelead = (localStorage.getItem('survey'));
                lead_submission(completelead, none);
                $(".statusbar").width(956);
            } else {
                const incomplete = (localStorage.getItem('survey'));
                incomplete_lead_submission(incomplete);
                // jump to next section
                next_quiz(none, block);
            }
            // Title Changing
            if (obj.hasOwnProperty('first_name')) {
                $('#titlewithname').text("Nice to meet you " + obj.first_name + ".");
            }
            console.log(localdata);

        }

        // Ajax Request for State and Provider
        function ajax_request(zip_code, address) {
            let data = new FormData();
            if (address) {
                data.append('address', address);
            }
            data.append('zip_code', zip_code);
            data.append('_token', "{{csrf_token()}}");
            let request = new XMLHttpRequest();
            request.open("POST", base_url + '/zip_code_check', true);
            request.send(data);
            request.onreadystatechange = function () {
                if (request.readyState === 4) {
                    try {
                        json = JSON.parse(request.responseText);
                        if (json.status === "Success") {
                            if (json.hasOwnProperty('state_code')) {
                                if (json.state_code != null) {
                                    var data = JSON.parse(localStorage.getItem('survey'));
                                    data.push({state_code: json.state_code.state + ' - ' + json.state_code.state_code })
                                    localStorage.setItem('survey', JSON.stringify(data));
                                    $('#state_text').text('Good news, ' + json.state_code.county + ', ' + json.state_code.state_code + ' pre-qualifies!');
                                } else {
                                    $('#state_text').text('Sorry! We could not find your State, but you may still qualify. Please continue the survey.');
                                }
                            } else {
                                if (json.utilities.length !== 0) {
                                    var htmlElements = "";
                                    for (var i = 0; i < json.utilities.length; i++) {
                                        htmlElements += `<div class="col-lg-4 col-md-6 col-sm-12 p-3"> <div class="card optioncard justify-content-center" style="height: 130px" onclick="steps('electric_provider','thanks',{electric_provider:` + json.utilities[i].utility_id + `})"><h1 class="p-2" style="font-size: 30px">` + json.utilities[i].utility_name + `</h1> <div class="after"></div></div> </div>`;
                                    }
                                    htmlElements += `<div class="col-lg-4 col-md-6 col-sm-12 p-3"> <div class="card optioncard justify-content-center" style="height: 130px" onclick="steps('electric_provider','thanks',{electric_provider:0})"><h1 class="p-2" style="font-size: 30px">Other</h1> <div class="after"></div></div> </div>`;
                                    var container = document.getElementById("providercard");
                                    container.innerHTML = htmlElements;
                                } else {
                                    $('#electric_provider_title').text('We could not find your utility provider, but you may still qualify. We will get more information from you.');
                                }
                            }
                        } else {
                            swal("Failure", json.result, "error");
                        }
                    } catch (ex) {
                        console.log(ex);
                        swal("Failure", " Error! Unexpected Response", "error");
                    }
                }
            }
        }
        let zip_state;
        // Jumping on next Quiz
        function next_quiz(none, block) {
            $('.' + none).fadeOut('', function () {
                $('.' + block).fadeIn("slow");
                survey_json = JSON.parse(localStorage.getItem('survey'));
                let state = survey_json.find((e)=>e.state_code)
                if(state && block=='what_address'){
                    let ddl = document.getElementById('state');
                    for(let i=0, iMax=ddl.options.length; i<iMax; i++){
                        if(ddl.options[i].innerText==state.state_code){
                            ddl.options.selectedIndex = i;
                        }
                    }
                    zip_state = state.state;
                }
            });
        }

        // Ajax Request For Submitting incomplete lead
        function incomplete_lead_submission(lead) {
            console.log(zip_state);
            let data = new FormData();
            data.append('lead', lead);
            data.append('incomplete', 'incomplete');
            data.append('_token', "{{csrf_token()}}");
            let request = new XMLHttpRequest();
            request.open("POST", base_url + '/lead_submission', true);
            request.send(data);
            request.onreadystatechange = function () {
                if (request.readyState === 4) {
                    try {
                        json = JSON.parse(request.responseText);
                        if (json.status === "incomplete") {
                            var data = JSON.parse(localStorage.getItem('survey'));
                            const filteredResult = data.find((e) => e.id == 0);
                            if(json.result === undefined){
                                if(filteredResult === undefined){
                                    data.push({id:0})
                                    localStorage.setItem('survey', JSON.stringify(data));
                                }
                            }else if(filteredResult !== undefined && filteredResult.id === 0 &&  json.result !== undefined ){
                                objIndex = data.findIndex((obj => obj.id === 0));
                                data[objIndex].id = json.result
                                localStorage.setItem('survey', JSON.stringify(data));
                            }
                        } else {
                            swal("Failure", json.result, "error");
                        }
                    } catch (ex) {
                        console.log(ex);
                        swal("Failure", " Error! Unexpected Response", "error");
                    }
                }
            }
        }


        let modal = (function () {/*
 <div id="background_fade" style="z-index:9999999; height: 100% !important; min-height: 100%; width: 100%; position: fixed; top: 0; background-color: rgba(0, 0, 0, 0.7);display:none;">
 <div id="processing" style="z-index:99999999;display: block; padding-right: 17px;" class="modal fade show" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog ajax_modal modal-sm" role="document">
 <div class="modal-content">
 <div class="modal-header">
 <h4 class="modal-title" id="modal_title">Processing..</h4>
 <button type="button" class="btn" onclick="$('#background_fade').fadeOut(function() { $(this).remove(); });" aria-hidden="true"><i class="fas fa-times"></i></button>
 </div>
 <div class="modal-body">
 <div id="modal_data" style="padding: 5px;">
 <img style="margin: 0 auto;display: block;" src="data:image/gif;base64,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">
 <p style="text-align: center;margin-top: 3px;">Please hang tight a moment while we record all of your answers.
 </br> THANK YOU for your patience!</p>
 </div>
 </div>
 </div>
 </div>
 */}).toString().match(/[^]*\/\*([^]*)\*\/\}$/)[1];

        // Ajax Request For Submitting lead , none para for display none previous page
        function lead_submission(lead, none) {
            let data = new FormData();
            data.append('lead', lead);
            data.append('_token', "{{csrf_token()}}");
            let request = new XMLHttpRequest();
            request.open("POST", base_url + '/lead_submission', true);
            request.send(data);
            $('body').append(modal);
            $('#background_fade').fadeIn();
            $('.btn').attr('disabled', 'disabled');
            request.onreadystatechange = function () {
                if (request.readyState === 4) {
                    $('#background_fade').fadeOut(function() {
                        $(this).remove();
                    });
                    $('.btn').removeAttr('disabled');
                    try {
                        json = JSON.parse(request.responseText);
                        console.log('response', json);
                        if (json.status === "Success") {
                            if (json.qualify_status === "unqualified") {
                                $('.' + none).fadeOut('', function () {
                                    $('.unqualify').fadeIn("slow");
                                });
                            } else {
                                fbq('track', 'Lead', {thanks: "Thanks"});
                                $('.' + none).fadeOut('', function () {
                                    $('.thanks').fadeIn("slow");
                                });
                            }
                        } else {
                            swal("Failure", json.result, "error");
                        }
                    } catch (ex) {
                        console.log(ex);
                        swal("Failure", " Error! Unexpected Response", "error");
                    }
                }
            }
        }


    </script>
@endsection
