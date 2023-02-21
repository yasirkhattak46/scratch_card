<html>
<head>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}">
    <title>GC-Solar</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bootstrap-5.2.2-dist/css/bootstrap.css')}}" rel="stylesheet">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">--}}
{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--        <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">--}}
    <script src="{{asset('assets/js/jquery-3.6.1.min.js')}}"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js')}}"></script>

    {!! settings()->meta_code !!}
    {!! settings()->google_head_code !!}

</head>
<body>
{!! settings()->google_body_code !!}
@yield('content')

<script>
    let base_url = "{{url('/')}}"
</script>
@yield('footer_scripts')


</body>
</html>
