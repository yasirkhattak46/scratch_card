    <div class="surveyform">
        <div class="pt-2 pb-3 text-center">
            <h3 class="px-5 pt-5" style="font-size: 24px; font-weight: bold">Finish the survey to see if you qualify for solar panels + battery for NO COST at install².</h3>
        </div>
        <div class="pt-2 pb-3 text-center">
            <h1 class="px-5" style="color: red; font-family: Montserrat, sans-serif; font-weight: 700">Is your household income above or below $40,000?</h1>
        </div>

        <div class="row justify-content-center px-3">
            <div class="col-lg-6 col-md-12 p-3">
                <div class="card optioncard" onclick="steps('specialoffer','credit_score',{income:'above $40000'})">
                    <img class="optionimage"
                         src="{{asset('assets/images/income-above.png')}}">
                    <div class="after"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 p-3">
                <div class="card optioncard" onclick="steps('specialoffer','credit_score',{income:'Below $40000'})" >
                    <img  class="optionimage"
                         src="{{asset('assets/images/income-below.png')}}">
                    <div class="after"></div>
                </div>
            </div>
        </div>
    </div>
