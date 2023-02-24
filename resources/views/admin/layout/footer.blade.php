<!-- Main Content -->
<footer class="main-footer">
    <div class="footer-left">
        Design & Developed By <a target="_blank" href="https://www.yasirkhattak.com">Yasir Khattak</a></a>
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
<script src="{{url('public/assets/bundles/datatables/datatables.min.js')}}"></script>
<script src="{{url('public/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('public/assets/bundles/datatables/export-tables/dataTables.buttons.min.js')}}"></script>
<script src="{{url('public/assets/bundles/datatables/export-tables/buttons.flash.min.js')}}"></script>
<script src="{{url('public/assets/bundles/datatables/export-tables/jszip.min.js')}}"></script>
<script src="{{url('public/assets/bundles/datatables/export-tables/pdfmake.min.js')}}"></script>
<script src="{{url('public/assets/bundles/datatables/export-tables/vfs_fonts.js')}}"></script>
<script src="{{url('public/assets/bundles/datatables/export-tables/buttons.print.min.js')}}"></script>
<script src="{{url('public/assets/js/page/datatables.js')}}"></script>
<script src="{{url('public/assets/bundles/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{url('public/assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
<script src="{{url('public/assets/bundles/select2/dist/js/select2.full.min.js')}}"></script>

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
