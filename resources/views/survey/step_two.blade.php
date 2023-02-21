    <div class="surveyform">
        <div class="pt-5 text-center">
            <h3 class="stepscount"><span>Step 2 of 7</span></h3>
        </div>
        <div class="pt-2 pb-3 text-center">
            <h1 class="surveytitle">How much is your average monthly power bill?</h1>
        </div>
        <div class="row justify-content-center px-3">
            <div class="col-lg-6 col-md-12 p-3">
                <div class="card optioncard" onclick="steps('step_two','step_three',{avg_bill:'0-100'})">
                    <img class="optionimage"
                         src="{{asset('assets/images/step_two/1-100.png')}}">
                    <div class="after"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 p-3">
                <div class="card optioncard" onclick="steps('step_two','step_three',{avg_bill:'101-125'})">
                    <img class="optionimage"
                         src="{{asset('assets/images/step_two/101-125.png')}}">
                    <div class="after"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 p-3">
                <div class="card optioncard" onclick="steps('step_two','step_three',{avg_bill:'125-150'})">
                    <img  class="optionimage"
                         src="{{asset('assets/images/step_two/125-150.png')}}">
                    <div class="after"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 p-3">
                <div class="card optioncard" onclick="steps('step_two','step_three',{avg_bill:'150-250'})">
                    <img  class="optionimage"
                         src="{{asset('assets/images/step_two/150-250.png')}}">
                    <div class="after"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 p-3">
                <div class="card optioncard" onclick="steps('step_two','step_three',{avg_bill:'250+'})">
                    <img  class="optionimage"
                         src="{{asset('assets/images/step_two/250+.png')}}">
                    <div class="after"></div>
                </div>
            </div>
        </div>
    </div>
