    <div class="surveyform">
        <div class="pt-5 text-center">
            <h3 class="stepscount"><span>Step 3 of 7</span></h3>
        </div>
        <div class="pt-2 pb-3 text-center">
            <h1 class="surveytitle">Do you own your home?</h1>
        </div>
        <div class="row justify-content-center px-3">
            <div class="col-lg-6 col-md-12 p-3">
                <div class="card optioncard" onclick="steps('step_three','step_four',{own_home:'I Own My Home'})">
                    <img class="optionimage"
                         src="{{asset('assets/images/step_three/ownhome.png')}}">
                    <div class="after"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 p-3">
                <div class="card optioncard" onclick="steps('step_three','step_four',{own_home:'I Rent My Rent'})">
                    <img  class="optionimage"
                         src="{{asset('assets/images/step_three/renthome.png')}}">
                    <div class="after"></div>
                </div>
            </div>
        </div>
    </div>
