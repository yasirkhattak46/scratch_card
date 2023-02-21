@extends('admin.layout.master')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-4">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa-solid fa-square-poll-vertical fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Leads Data</p>
                        <h6 class="mb-0">74</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa-solid fa-square-check fa-3x text-success"></i>
                    <div class="ms-3">
                        <p class="mb-2">Sent To GR</p>
                        <h6 class="mb-0">15</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa-solid fa-square-xmark fa-3x text-danger"></i>
                    <div class="ms-3">
                        <p class="mb-2">Remaining</p>
                        <h6 class="mb-0">50</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-8">
                <table id="datatable" class="table table-striped" style="width:100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>File Name</th>
                        <th>Uploaded Date</th>
                        <th>Download</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{--            @forelse($leads as $key => $lead)--}}
                    <tr>
                        <td> 1
                            {{--                        {{$key+1}}--}}
                        </td>
                        <td>Vendor</td>
                        <td>10-1-2023</td>
                        <td>Download Now</td>
                    </tr>
                    {{--            @empty--}}
                    {{--            @endforelse--}}
                </table>
            </div>
            <div class="col-4">
                <form action="{{route('gr_data.store')}}" id="gr_data" method="post">
                    <div class="row g-4">
                        @csrf
                        <div class="col-sm-12 col-xl-12 text-center">
                            <div class="form-floating">
                                <input type="file" name="lead_file">
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-12 text-center">
                            <button class="btn btn-outline-primary w-25 m-2" id="code_update" type="submit">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->
@endsection
@section('footer_scripts')
    <script>

        $('#gr_data').submit(function (e){
            e.preventDefault();
            let data = new FormData(this);
            data.append('_token','{{csrf_token()}}');
            let a = function () {
                // window.location.reload();
            };
            let arr = [a];
            call_ajax_with_functions('', '{{route('gr_data.store')}}', data, arr);
        })
    </script>
@endsection
