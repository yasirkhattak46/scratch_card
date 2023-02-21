<!-- Main Content -->
<footer class="main-footer">
    <div class="footer-left">
        <a href="templateshub.net">Templateshub</a></a>
    </div>
    <div class="footer-right">
    </div>
</footer>
</div>
</div>
<!-- General JS Scripts -->
<script src="{{url('/public/assets/js/app.min.js')}}"></script>
<!-- JS Libraies -->
<script src="{{url('public/assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
<!-- Page Specific JS File -->
<script src="{{url('public/assets/js/page/index.js')}}"></script>
<!-- Template JS File -->
<script src="{{url('/public/assets/js/scripts.js')}}"></script>
<!-- Custom JS File -->
<script src="{{url('public/assets/js/custom.js')}}"></script>
<script src="{{url('public/assets/js/ajax.js')}}"></script>
<script src="{{url('public/assets/js/sweetalert.min.js')}}"></script>


<script>
    $('#logout').on('click', function (e) {
        e.preventDefault();
        let data = new FormData();
        data.append('_token', '{{csrf_token()}}');
        let a = function () {
            setTimeout(function () {
                window.location.href = '{{url('/admin')}}'
            }, 1000);
        };
        let arr = [a];
        call_ajax_with_functions('', '{{route('logout')}}', data, arr);
    })
</script>



</body>
<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
