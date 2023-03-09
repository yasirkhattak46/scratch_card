@extends('admin.layout.master')
@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{isset($quiz_title) ? $quiz_title->title : 'All Winners' }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                    <thead>
                                    <tr>
                                        <th>LOGO</th>
                                        <th>NAME</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Address</th>
                                        <th>Restaurant</th>
                                        <th>Quiz</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($winners as $winner)
                                        <tr>
                                            <td><img style="max-width: 100px; width: 80px; max-height: 100px"
                                                     src="{{asset('public/restaurant_logo/'.(isset($winner->restaurants) ? $winner->restaurants->restaurant_logo : ''))}}">
                                            </td>
                                            <td>{{$winner->fname}}</td>
                                            <td>{{$winner->email}}</td>
                                            <td>{{$winner->contact}}</td>
                                            <td>{{$winner->address}}</td>
                                            <td>{{isset($winner->restaurants) ? $winner->restaurants->restaurant_name : ''}}</td>
                                            <td>{{isset($winner->quiz)?$winner->quiz->title : ''}}</td>
                                            {{--                                            <td><span--}}
                                            {{--                                                    class="badge badge-{{$winner->status == 1 ? 'success' : 'danger'}}">{{$winner->status == 1 ? 'active' : 'inactive'}}</span>--}}
                                            {{--                                            </td>--}}
                                            {{--                                            <td>--}}
                                            {{--                                                <a href="{{route('restaurant_scratch',$winner->id)}}"><i--}}
                                            {{--                                                        class="far fa-eye font-15 text-success"></i></a>--}}
                                            {{--                                                <a href="{{route('working_hours',$winner->id)}}"><i--}}
                                            {{--                                                        class="far fa-clock  font-15"></i></a>--}}
                                            {{--                                                <a href="{{route('restaurants.edit',$winner->id)}}"><i--}}
                                            {{--                                                        class="fas fa-edit  font-15 text-warning"></i></a>--}}
                                            {{--                                                    <i class="fas fa-trash-alt font-15 text-danger" onclick="delete_file({{$winner->id}})"></i>--}}
                                            {{--                                            </td>--}}
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
