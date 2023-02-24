@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Restaurant Information</h4>
                </div>
                <div class="card-body">
                         @include('restaurants.partial.restaurant_information')
                </div>
                </div>
            </div>
        </div>
@endsection
@section('footer_scripts')
    <script>

        // Image Previewer
        $(document).ready(function (e) {
            $('.image_upload_script').change(function () {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $(this).parents('.image_section').find('.restaurant_preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });

        // Create or Update Restaurant
        $('#restaurant_form').submit(function (e) {
            e.preventDefault();
            let data = new FormData(this);
            let a = function () {
                setTimeout(function () {
                    window.location.href = '{{route('restaurants.index')}}'
                }, 1000);
            };
            let arr = [a];
            call_ajax_with_functions('', '{{route('restaurants.store')}}', data, arr);
        });

    </script>
@endsection
