<div class="surveyform">
    <div class="pt-5 text-center">
        <h3 class="stepscount"><span>Step 1 of 7</span></h3>
    </div>
    <div class="text-center">
        <h1 class="surveytitle">What is the main reason you are interested in solar?</h1>
    </div>
    <div class="row justify-content-center px-3">
        <div class="col-lg-4 col-md-12 p-3">
            <div class="card optioncard" onclick="steps('step_one','step_two',{main_reason:'Lower bill'})">
                <img width="100%" class="p-3"
                     src="{{asset('assets/images/first_step/electricbill.png')}}">
                <div class="after"></div>

            </div>
        </div>
        <div class="col-lg-4 col-md-12  p-3">
            <div class="card optioncard" onclick="steps('step_one','step_two',{main_reason:'Power Outage'})">
                <img width="100%" class="p-3"
                     src="{{asset('assets/images/first_step/poweroutage.png')}}">
                <div class="after"></div>

            </div>
        </div>
        <div class="col-lg-4 col-md-12  p-3">
            <div class="card optioncard" onclick="steps('step_one','step_two',{main_reason:'Go Green'})">
                <img width="100%" class="p-3"
                     src="{{asset('assets/images/first_step/gogreen.png')}}">
                <div class="after"></div>

            </div>
        </div>
        <div class="col-lg-4 col-md-12 p-3">
            <div class="card optioncard" onclick="steps('step_one','step_two',{main_reason:'Increase Home Value'})">
                <img width="100%" class="p-3"
                     src="{{asset('assets/images/first_step/homevalue.png')}}">
                <div class="after"></div>

            </div>
        </div>
        <div class="col-lg-4 col-md-12 p-3">
            <div class="card optioncard"
                 onclick="steps('step_one','step_two',{main_reason:'Adding panel to my system'})">
                <img width="100%" class="p-3"
                     src="{{asset('assets/images/first_step/addingpanels.png')}}">
                <div class="after"></div>
            </div>
        </div>
    </div>
</div>
