<div class="">
    <div class="surveyform">
        <div class="pt-5 text-center">
            <h3 class="stepscount"><span>Step 7 of 7</span></h3>
        </div>
        <div class="pt-2 pb-3 text-center">
            <h2 style="color: #e74c3c; font-weight: bold; font-size: 30px; padding-top: 10px"><span>What is the best phone number to contact you?</span>
            </h2>
        </div>

        <div class="pt-2 pb-3 text-center">
            <h4 style="font-size: 18px;"> We respect your privacy and will not send you unwanted calls or texts</h4>
        </div>
        <div class="row justify-content-center px-3">
            <div class="col-md-10 py-2">
                <input class="input-group custominputs" id="phone" placeholder="Phone Number" type="number" required>
            </div>
            <div class="px-5 pt-3 text-center">
                <h6 style="font-size: 12px">By clicking "NEXT STEP" and submitting this form I agree GC Solar can call
                    or text my phone number (provided above) or email me and I may revoke this consent at any time. I
                    agree to the <a href="#privacy_policy" data-bs-toggle="modal" data-bs-target="#privacy_policy">TERMS & CONDITIONS/PRIVACY POLICY</a>. I understand that my authorization to receive calls,
                    texts and emails is not a condition of purchasing of any goods or services.</h6>
            </div>

            <div class="col-md-10 py-5 text-center">
                <a class="custombtn"
                   onclick="steps('step_seven','credit_score',{phone:document.getElementById('phone').value})">Next Step<i
                        class="fa-solid fa-arrow-right ms-3"></i></a>
            </div>
        </div>
        <div class="text-center">
            <img width="25%" src="{{asset('assets/images/step_six/rating.png')}}">
        </div>
    </div>
</div>

