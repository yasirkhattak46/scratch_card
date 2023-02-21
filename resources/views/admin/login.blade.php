<!DOCTYPE html>
<html lang="en">

@if(Auth::check())
    <script>window.location.href = '{{url('/admin')}}'</script>
@endif


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Rublyx - Login</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{url('public/assets/css/app.min.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/bundles/bootstrap-social/bootstrap-social.css')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{url('public/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/components.css')}}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{url('public/assets/css/custom.css')}}">
    <link rel='shortcut icon' type='image/x-icon' href='{{url('public/assets/img/scratch_logo.jpg')}}' />
</head>

<body>
<div class="loader"></div>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Login</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="#" id="login" class="needs-validation" novalidate="">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your email
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- General JS Scripts -->
<script src="{{url('public/assets/js/app.min.js')}}"></script>
<!-- JS Libraies -->
<!-- Page Specific JS File -->
<!-- Template JS File -->
<script src="{{url('public/assets/js/scripts.js')}}"></script>
<!-- Custom JS File -->
<script src="{{url('public/assets/js/custom.js')}}"></script>
<script src="{{url('public/assets/js/ajax.js')}}"></script>
<script src="{{url('public/assets/js/sweetalert.min.js')}}"></script>


</body>

<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>
<script>
    $('#login').submit(function (e) {
        e.preventDefault();
        let data = new FormData(this);
        let a = function () {
            setTimeout(function () {
                window.location.href = '{{url('/admin')}}'
            }, 1000);
        };
        let arr = [a];
        call_ajax_with_functions('', '{{route('login_action')}}', data, arr);
    });
</script>
</body>

</html>
