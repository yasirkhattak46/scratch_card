@extends('admin.layout.master')
@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="padding-20">
                            <form id="profile_form" action="{{route('update_profile')}}" method="post"
                                  class="needs-validation">
                                @csrf
                                <div class="card-header">
                                    <h4>Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Name</label>
                                            <input name="name" type="text" placeholder="Please fill in the name"
                                                   class="form-control" value="{{$profile->name}}">
                                            <div class="invalid-feedback">
                                                Please fill in the name
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" value="{{$profile->email}}">
                                            <div class="invalid-feedback">
                                                Please fill in the email
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4 col-12">
                                            <label>Current Password</label>
                                            <input type="password" name="old_password" placeholder="Current Password"
                                                   class="form-control">
                                            <div class="invalid-feedback">
                                                Please fill Current Password
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-12">
                                            <label>New Password</label>
                                            <input type="password" name="new_password" placeholder="New Password"
                                                   class="form-control">
                                            <div class="invalid-feedback">
                                                Please fill New Password
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-12">
                                            <label>Confirm New Password </label>
                                            <input type="password" name="confirm_password"
                                                   placeholder="Confirm New Password" class="form-control">
                                            <div class="invalid-feedback">
                                                Please Confirm New Password
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('footer_scripts')
    <script>
        $('#profile_form').submit(function (e) {
            e.preventDefault();
            let data = new FormData(this);
            data.append('_token', '{{csrf_token()}}');
            let a = function () {
                setTimeout(function () {
                    window.location.reload()
                }, 1000);
            };
            let arr = [a];
            call_ajax_with_functions('', '{{url('admin/update_profile')}}', data, arr);
        })
    </script>
@endsection
