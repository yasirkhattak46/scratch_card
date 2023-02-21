    <div class="surveyform">
        <div class="pt-5 text-center">
            <h1 class="surveytitle">Step 6 of 7</h1>
        </div>
        <div class="pt-2 pb-3 text-center">
            <h1 class="surveytitle">How shaded is your roof?</h1>
        </div>
        <div class="row justify-content-center px-3">
            <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                <div class="card optioncard justify-content-center" style="height: 130px" onclick="steps('roof_type','thanks',{roof_shade:'No Shade'})">
                    <h1 class="p-2" style="font-size: 30px">No Shade</h1>
                    <div class="after"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                <div class="card optioncard justify-content-center" style="height: 130px" onclick="steps('roof_type','trim_trees',{roof_shade:'Slide Shade'})">
                    <h1 class="p-2" style="font-size: 30px">Slightly Shaded</h1>
                    <div class="after"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 p-3">
                <div class="card optioncard justify-content-center" style="height: 130px" onclick="steps('roof_type','trim_trees',{roof_shade:'Complete Shaded'})">
                    <h1 class="p-2" style="font-size: 30px">Completely Shaded</h1>
                    <div class="after"></div>
                </div>
            </div>
        </div>
    </div>
