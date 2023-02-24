<div class="col-12 pt-2">
    <form id="restaurant_form">
        @csrf
        <input type="hidden" name="id" value="{{isset($restaurant) ? $restaurant->id : ''}}">
    <div class="row">
        <div class="form-group col-lg-6 col-sm-12">
            <label>Restaurant Name</label>
            <input type="text" value="{{isset($restaurant) ? $restaurant->restaurant_name : ''}}" class="form-control" name="restaurant_name" required>
        </div>
        <div class="form-group col-lg-6 col-sm-126">
            <label>Restaurant Address</label>
            <input type="text" value="{{isset($restaurant) ? $restaurant->restaurant_address : ''}}" class="form-control" name="restaurant_address" required>
        </div>
        <div class="form-group col-lg-6 col-sm-12">
            <label>Restaurant House Number</label>
            <input type="text" value="{{isset($restaurant) ? $restaurant->restaurant_name : ''}}" class="form-control" name="restaurant_house_number" required>
        </div>
        <div class="form-group col-lg-6 col-sm-12">
            <label>Restaurant House city</label>
            <input type="text" value="{{isset($restaurant) ? $restaurant->restaurant_house_number : ''}}" class="form-control" name="restaurant_city" required>
        </div>
        <div class="form-group col-lg-6 col-sm-12">
            <label>Restaurant Postal Code</label>
            <input type="text" value="{{isset($restaurant) ? $restaurant->restaurant_postal_code : ''}}" class="form-control" name="restaurant_postal_code" required>
        </div>
        <div class="form-group col-lg-6 col-sm-12">
            <label>Owner Name</label>
            <input type="text" value="{{isset($restaurant) ? $restaurant->owner_name : ''}}" class="form-control" name="owner_name" required>
        </div>
        <div class="form-group col-lg-6 col-sm-12">
            <label>Owner Email</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-envelope"></i>
                    </div>
                </div>
                <input type="text" value="{{isset($restaurant) ? $restaurant->owner_email : ''}}" name="owner_email" class="form-control"
                       placeholder="Email" required>
            </div>
        </div>
        <div class="form-group col-lg-6 col-sm-12">
            <label>Phone Number</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-phone"></i>
                    </div>
                </div>
                <input type="number" value="{{isset($restaurant) ? $restaurant->owner_phone : ''}}" name="owner_phone"
                       class="form-control phone-number" required>
            </div>
        </div>
        <div class="form-group col-lg-6 col-sm-12">
            <label>Google Reviews Link</label>
            <input type="text" value="{{isset($restaurant) ? $restaurant->google_reviews_link : ''}}" class="form-control" name="google_reviews_link" required>
        </div>
        <div class="form-group col-lg-6 col-sm-12">
            <label>Menu Link</label>
            <input type="text" value="{{isset($restaurant) ? $restaurant->menu_link : ''}}" class="form-control" name="menu_link" required>
        </div>
        <div class="form-group col-lg-6 col-sm-12">
            <label>Validation Code</label>
            <input type="text" value="{{isset($restaurant) ? $restaurant->validation_code : ''}}" class="form-control" name="validation_code" required>
        </div>
        <div
            class="form-group col-lg-6 col-sm-12 d-flex flex-column align-items-center">
            <label>Status</label>
            <label class="switch">
                <input type="hidden" value="0"  id="togBtn" name="status">
                <input type="checkbox" {{isset($restaurant) && $restaurant->status == 1 ? 'checked' : ''}} value="1"  id="togBtn" name="status">
                <div class="slider round"></div>
            </label>
        </div>
        <div
            class="form-group image_section col-lg-6 col-sm-12 d-flex flex-column align-items-center">
            <label>Restaurant Logo</label>
            <img src="{{isset($restaurant) ? asset('public/restaurant_logo/'.$restaurant->restaurant_logo) : asset('public/assets/img/restaurant_wide.png')}}"
                 class="restaurant_preview" alt="preview image">
            <div class="upload-btn-wrapper">
                <button class="img_btn">Restaurant Logo</button>
                <input class="image_upload_button image_upload_script" type="file"
                       name="restaurant_logo" />
            </div>
        </div>
        <div
            class="form-group image_section col-lg-6 col-sm-12 d-flex flex-column align-items-center">
            <label>Scratch Image</label>
            <img src="{{isset($restaurant) ? asset('public/scratch_img/'.$restaurant->scratch_img) : asset('public/assets/img/restaurant_wide.png')}}"
                 class="restaurant_preview" alt="preview image">
            <div class="upload-btn-wrapper">
                <button class="img_btn">Scratch Image</button>
                <input class="image_upload_button image_upload_script" type="file"
                       name="scratch_img" />
            </div>
        </div>
        <div
            class=" pt-3 form-group image_section col-lg-12 col-sm-12 d-flex flex-column align-items-center">
            <button type="submit" class="btn btn-success">Save Restaurant</button>
        </div>
    </div>
    </form>
</div>
