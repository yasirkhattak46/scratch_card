@extends('admin.layout.master')
@section('content')
<div class="col-12 pt-2">
    <div class="card">
        <div class="card-header">
            <h4>Restaurants Working Hours </h4>
        </div>
        <div class="card-body">
            <form method="post" action="javascript:save_working_hour()" id="working_hour_id" autocomplete="off" enctype="multipart/form-data">
                @csrf
                {{--                Monday--}}
                <input type="hidden" name="restaurant_id" value="{{isset($restaurant_id)?$restaurant_id:''}}">
                <div class="row align-items-baseline">
                    <div class="form-group col-2">
                        <div class="pretty p-default">
                            <input type="hidden" name="monday" value="0">
                            <input type="checkbox" name="monday" {{isset($working_hour->monday)?($working_hour->monday!=null?'checked':''):''}} value="1">
                            <div class="state p-primary">
                                <label>Monday</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-5">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                @php if (isset($working_hour->monday)){ $monday=json_decode($working_hour->monday,true);} @endphp
                                <input type="text" class="form-control timepicker" value="{{isset($working_hour->monday)?$monday['from']:''}}" name="monday_time[from]">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-5">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control timepicker" value="{{isset($working_hour->monday)?$monday['to']:''}}" name="monday_time[to]">
                            </div>
                        </div>
                    </div>
                </div>
{{--                Tuesday--}}
                <div class="row align-items-baseline">
                    <div class="form-group col-2">
                        <div class="pretty p-default">
                            <input type="hidden" name="tuesday" value="0">
                            <input type="checkbox" name="tuesday" {{isset($working_hour->tuesday)?($working_hour->tuesday!=null?'checked':''):''}} value="1">
                            <div class="state p-primary">
                                <label>Tuesday</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-5">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                @php if (isset($working_hour->tuesday)){ $tuesday=json_decode($working_hour->tuesday,true);} @endphp

                                <input type="text" class="form-control timepicker" value="{{isset($working_hour->tuesday)?$tuesday['from']:''}}" name="tuesday_time[from]">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-5">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control timepicker" value="{{isset($working_hour->tuesday)?$tuesday['to']:''}}" name="tuesday_time[to]">
                            </div>
                        </div>
                    </div>
                </div>
{{--                Wednesday--}}
                <div class="row align-items-baseline">
                    <div class="form-group col-2">
                        <div class="pretty p-default">
                            <input type="hidden" name="wednesday" value="0">
                            <input type="checkbox" name="wednesday" {{isset($working_hour)?($working_hour->wednesday!=null?'checked':''):''}} value="1">
                            <div class="state p-primary">
                                <label>Wednesday</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-5">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                @php if (isset($working_hour->wednesday)){$wednesday=json_decode($working_hour->wednesday,true);} @endphp
                                <input type="text" class="form-control timepicker" value="{{isset($working_hour->wednesday)?$wednesday['from']:''}}" name="wednesday_time[from]">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-5">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control timepicker" value="{{isset($working_hour->wednesday)?$wednesday['to']:''}}" name="wednesday_time[to]">
                            </div>
                        </div>
                    </div>
                </div>
{{--                Thursday--}}
                <div class="row align-items-baseline">
                    <div class="form-group col-2">
                        <div class="pretty p-default">
                            <input type="hidden" name="thursday" value="0">
                            <input type="checkbox" name="thursday" {{isset($working_hour)?($working_hour->thursday!=null?'checked':''):''}} value="1">
                            <div class="state p-primary">
                                <label>Thursday</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-5">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                @php if (isset($working_hour->thursday)){ $thursday=json_decode($working_hour->thursday,true);} @endphp
                                <input type="text" class="form-control timepicker" value="{{isset($working_hour->thursday)?$thursday['from']:''}}" name="thursday_time[from]">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-5">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control timepicker" value="{{isset($working_hour->thursday)?$thursday['to']:''}}" name="thursday_time[to]">
                            </div>
                        </div>
                    </div>
                </div>
{{--                Friday--}}
                <div class="row align-items-baseline">
                    <div class="form-group col-2">
                        <div class="pretty p-default">
                            <input type="hidden" name="friday" value="0">
                            <input type="checkbox" name="friday" {{isset($working_hour->friday)?($working_hour->friday!=null?'checked':''):''}} value="1">
                            <div class="state p-primary">
                                <label>Friday</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-5">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                @php if (isset($working_hour->friday)){ $friday=json_decode($working_hour->friday,true);} @endphp
                                <input type="text" class="form-control timepicker" value="{{isset($working_hour->friday)?$friday['from']:''}}" name="friday_time[from]">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-5">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control timepicker" value="{{isset($working_hour->friday)?$friday['to']:''}}" name="friday_time[to]">
                            </div>
                        </div>
                    </div>
                </div>
{{--                Saturday--}}
                <div class="row align-items-baseline">
                    <div class="form-group col-2">
                        <div class="pretty p-default">
                            <input type="hidden" name="saturday" value="0">
                            <input type="checkbox" name="saturday" {{isset($working_hour->saturday)?($working_hour->saturday!=null?'checked':''):''}} value="1">
                            <div class="state p-primary">
                                <label>Saturday</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-5">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                @php if (isset($working_hour->saturday)){ $saturday=json_decode($working_hour->saturday,true);} @endphp
                                <input type="text" class="form-control timepicker" value="{{isset($working_hour->saturday)?$saturday['from']:''}}" name="saturday_time[from]">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-5">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control timepicker" value="{{isset($working_hour->saturday)?$saturday['to']:''}}" name="saturday_time[to]">
                            </div>
                        </div>
                    </div>
                </div>
{{--                Sunday--}}
                <div class="row align-items-baseline">
                    <div class="form-group col-2">
                        <div class="pretty p-default">
                            <input type="hidden" name="sunday" value="0">
                            <input type="checkbox" name="sunday" {{isset($working_hour->sunday)?($working_hour->sunday!=null?'checked':''):''}} value="1">
                            <div class="state p-primary">
                                <label>Sunday</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-5">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                @php if (isset($working_hour->sunday)){$working_hour->sunday ? $sunday=json_decode($working_hour->sunday,true):'';} @endphp
                                <input type="text" class="form-control timepicker" value="{{isset($working_hour->sunday)?$sunday['from']:''}}" name="sunday_time[from]">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-5">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control timepicker" value="{{isset($working_hour->sunday)?$sunday['to']:''}}" name="sunday_time[to]">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success mt-2">Save Working Hours
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('footer_scripts')
    <script>
        function save_working_hour(){
            let data = new FormData($('#working_hour_id')[0])
            let a=function(){
                window.location.href='{{url('admin/restaurants')}}'
            }
            let arr=[a]
            call_ajax_with_functions('','{{route('save_working_hour')}}',data,arr);
        }
    </script>
@endsection

