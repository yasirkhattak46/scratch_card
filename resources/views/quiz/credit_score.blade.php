    <div class="surveyform">
        <div class="pt-5 text-center">
            <h3 class="stepscounts"> Step 2 of 5</h3>
        </div>
        <div class="pt-2 pb-3 text-center">
            <h3 class="surveytitle">Is your credit score above or below 640?</h3>
        </div>
        <div class="row justify-content-center px-3">
            <div class="col-lg-4 col-md-12 p-3">
                <div class="card optioncard" onclick="steps('credit_score','type_of_home',{credit_score:'Above 640'})">
                    <img width="100%" class="p-2"
                         src="{{asset('assets/images/credit-above.png')}}">
                    <div class="after"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 p-3">
                <div class="card optioncard" onclick="steps('credit_score','type_of_home',{credit_score:'Below 640'})">
                    <img width="100%" class="p-2"
                         src="{{asset('assets/images/credit-below.png')}}">
                    <div class="after"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 p-3">
                <div class="card optioncard" onclick="steps('credit_score','type_of_home',{credit_score:'Not Sure'})">
                    <img width="100%" class="p-2"
                         src="{{asset('assets/images/credit-not-sure.png')}}">
                    <div class="after"></div>
                </div>
            </div>
        </div>
    </div>
