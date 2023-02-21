    <div class="surveyform">
        <div class="pt-5 text-center">
            <h1 class="stepscounts">Step 3 of 5</h1>
        </div>
        <div class="pt-2 pb-3 text-center">
            <h3 class="surveytitle">What type of home do you live in?</h3>
        </div>
        <div class="row justify-content-center px-3">
            <div class="col-lg-3 col-md-12 p-3">
                <div class="card optioncard" style="height: 100px!important;" onclick="steps('type_of_home','what_address',{home_type:'Single Family Home'})">
                    <img width="100%" class="p-2"
                         src="{{asset('assets/images/singlefamily.png')}}">
                    <div class="after"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 p-3">
                <div class="card optioncard" style="height: 100px!important;" onclick="steps('type_of_home','what_address',{home_type:'Mobile Home'})">
                    <img width="100%" class="p-2"
                         src="{{asset('assets/images/mobilehome.png')}}">
                    <div class="after"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 p-3">
                <div class="card optioncard" style="height: 100px!important;" onclick="steps('type_of_home','what_address',{home_type:'Apartment/Condo '})">
                    <img width="100%" class="p-2"
                         src="{{asset('assets/images/apartment.png')}}">
                    <div class="after"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 p-3">
                <div class="card optioncard" style="height: 100px!important;" onclick="steps('type_of_home','what_address',{home_type:'Not Sure'})">
                    <img width="100%" class="p-2"
                         src="{{asset('assets/images/not-sure.png')}}">
                    <div class="after"></div>
                </div>
            </div>
        </div>
    </div>
