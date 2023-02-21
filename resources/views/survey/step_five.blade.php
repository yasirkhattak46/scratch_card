    <div class="surveyform">
        <div class="pt-5 text-center">
            <h3 class="stepscount"><span>Step 5 of 7</span></h3>
        </div>
        <div class="pt-2 text-center">
            <h1 class="surveytitle" id="state_text"></h1>
        </div>
        <div class="pt-2 pb-3 text-center">
            <h4 class=""> Please tell us your First and Last Name</h4>
        </div>

        <div class="row justify-content-center px-3">
            <div class="col-md-10 py-2">
                <input class="input-group custominputs" id="first_name" placeholder="First Name" type="text">
            </div>
            <div class="col-md-10 py-2">
                <input class="input-group custominputs" id="last_name" placeholder="Last Name" type="text">
            </div>
            <div class="col-md-10 py-5 text-center">
                <a class="custombtn" onclick="steps('step_five','step_six',{first_name:getElementById('first_name').value},{last_name:getElementById('last_name').value})">Next Step<i class="fa-solid fa-arrow-right ms-3"></i></a>
            </div>
        </div>
    </div>
