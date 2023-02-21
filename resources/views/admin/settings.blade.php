@extends('admin.layout.master')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <form action="{{route('setting_form')}}" id="setting_form" method="post">
        <div class="row g-4">
                @csrf
            <div class="col-sm-12 col-xl-6">
                <div class="form-floating">
                    <textarea class="form-control" name="google_head_code" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px;">{{$settings->google_head_code}}</textarea>
                    <label for="floatingTextarea">Google Tag Manager Head</label>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="form-floating">
                    <textarea class="form-control" name="google_body_code" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px;">{{$settings->google_body_code}}</textarea>
                    <label for="floatingTextarea">Google Tag Manager Body</label>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="form-floating">
                    <textarea class="form-control" name="meta_code" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px;">{{$settings->meta_code}}</textarea>
                    <label for="floatingTextarea">Facebook Meta</label>
                </div>
            </div>

            <div class="col-sm-12 col-xl-12 text-end">
                <button class="btn btn-outline-primary w-25 m-2" id="code_update" type="submit">Save</button>
            </div>
        </div>
        </form>

    </div>
    <!-- Sale & Revenue End -->

@endsection
@section('footer_scripts')
    <script>

        $('#setting_form').submit(function (e){
            e.preventDefault();
            let data = new FormData(this);
            data.append('_token','{{csrf_token()}}');
            let a = function () {
                window.location.reload();
            };
            let arr = [a];
            call_ajax_with_functions('', '{{route('setting_form')}}', data, arr);
        })
    </script>
@endsection
