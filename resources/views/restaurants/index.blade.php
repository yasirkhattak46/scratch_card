@extends('admin.layout.master')
@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Restaurant Management</h4>
                        </div>
                        <div class="card-body">
                            <a href="{{route('restaurants.create')}}" class="float-right btn btn-success">Add
                                Restaurant</a>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                    <thead>
                                    <tr>
                                        <th>LOGO</th>
                                        <th>NAME</th>
                                        <th>OWNER</th>
                                        <th>OWNER EMAIL</th>
                                        <th>CITY</th>
                                        <th>STATUS</th>
                                        <th>ACTION</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($restaurants as $restaurant)
                                        <tr>
                                            <td><img style="max-width: 100px; width: 80px; max-height: 100px"
                                                     src="{{asset('public/restaurant_logo/'.$restaurant->restaurant_logo)}}">
                                            </td>
                                            <td>{{$restaurant->restaurant_name}}</td>
                                            <td>{{$restaurant->owner_name}}</td>
                                            <td>{{$restaurant->owner_email}}</td>
                                            <td>{{$restaurant->restaurant_city}}</td>
                                            <td><span
                                                    class="badge badge-{{$restaurant->status == 1 ? 'success' : 'danger'}}">{{$restaurant->status == 1 ? 'active' : 'inactive'}}</span>
                                            </td>
                                            <td>
                                                <a href="{{route('working_hours',$restaurant->id)}}"><i
                                                        class="far fa-eye font-15 text-success"></i></a>
                                                <a href="{{route('working_hours',$restaurant->id)}}"><i
                                                        class="far fa-clock  font-15"></i></a>
                                                <a href="{{route('restaurants.edit',$restaurant->id)}}"><i
                                                        class="fas fa-edit  font-15 text-warning"></i></a>
                                                    <i class="fas fa-trash-alt font-15 text-danger" onclick="delete_file({{$restaurant->id}})"></i>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer_scripts')

    <script>
        function delete_file(id) {
            let data = new FormData();
            data.append('_token', '{{csrf_token()}}');
            data.append('id', id)
            let a = function () {
                setTimeout(function () {
                    window.location.reload();
                }, 1000);
            };
            let arr = [a];
            swal({
                title: "Are you sure?",
                text: "Are you sure to delete This ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    call_ajax_with_functions('', '{{route('restaurant_delete')}}', data, arr);
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
        }
    </script>
@endsection
