    <div class="surveyform">
        <div class="pt-5 text-center">
            <h3 class="stepscount"><span>Step 4 of 7</span></h3>
        </div>
        <div class="pt-2 text-center">
            <h1 class="surveytitle">What is your zip code?</h1>
        </div>
        <div class="pt-2 pb-3 text-center">
            <h4 class=""> So we can check to see if the program is being offered in your area.</h4>
        </div>

        <div class="row justify-content-center px-3">
            <div class="col-md-10">
                <input class="input-group custominputs" id="zip_code" placeholder="Zip Code" type="number" maxlength="5" name="zip_code">
            </div>
            <div class="col-md-10 py-5 text-center">
                <a  class="custombtn" onclick="steps('step_four','step_five',{zip_code:document.getElementById('zip_code').value})">Next Step<i class="fa-solid fa-arrow-right ms-3"></i></a>
            </div>
        </div>
    </div>
