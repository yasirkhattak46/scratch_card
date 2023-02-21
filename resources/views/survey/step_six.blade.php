    <div class="surveyform">
        <div class="pt-5 text-center">
            <h3 class="stepscount"><span>Step 6 of 7</span></h3>
        </div>
        <div class="pt-2 text-center">
            <h1 class="surveytitle pb-0" id="titlewithname"></h1>
        </div>
        <div class="text-center">
            <h1 class="surveytitle" id="titlewithname">Please tell us your email address:</h1>
        </div>


        <div class="pt-2 pb-3 text-center">
            <h5 class=""> We respect your privacy and will not share your email with unaffiliated third parties  🔒</h5>
        </div>

        <div class="row justify-content-center px-3">
            <div class="col-md-10 py-2">
                <input id="email" class="input-group custominputs" placeholder="Email Address" type="email" required>
            </div>
            <div class="col-md-10 py-5 text-center">
                <a  class="custombtn" onclick="steps('step_six','step_seven',{email:document.getElementById('email').value})">Next Step<i class="fa-solid fa-arrow-right ms-3"></i></a>
            </div>
        </div>
        <div class="text-center">
            <img width="25%"  src="{{asset('assets/images/step_six/rating.png')}}">
        </div>
    </div>
