    <div class="surveyform">
        <div class="pt-5 text-center">
            <h1 class="stepscounts"> Step 4 of 5</h1>
        </div>
        <div class="pt-2 text-center">
            <h3 class="surveytitle">What are your street address and state?</h3>
        </div>
        <div class="pt-2 text-center">
            <h4 class="" style="font-size: 24px; font-family: Roboto, sans-serif; margin: 0; font-weight: bold">We use satellite imagery to assess your roof's sunlight potential.</h4>
        </div>

        <div class="row justify-content-center px-3">
            <div class="col-12 p-3 text-center">
                    <img width="80%" class="p-2"
                         src="{{asset('assets/images/sunroof.png')}}">
                    <div class="after"></div>
                <div class="row justify-content-center px-3">
                    <div class="col-md-10 py-2">
                        <input class="input-group custominputs" id="address" placeholder="Street Address" type="text" required>
                    </div>
                    <div class="col-md-10 py-2">
                        <script type="text/javascript">
                        </script>
                        <select class="input-group custominputs" id="state" required>
                            @foreach($states as $state)
                            <option value="{{$state->state_code}}">{{$state->state.' - '.$state->state_code}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-10 pt-5 text-center">
                        <a onclick="steps('what_address','electric_provider',{address:document.getElementById('address').value},{state:document.getElementById('state').value})" class="custombtn">Next Step<i class="fa-solid fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
