<input type="button" style="padding: .5em 1.3em;
    margin-bottom: 10px;
    background: #f30000;
    color: white;
    border: 1px solid;
    border-radius: 5px;" class="delete_all" value="Delete">
<table id="datatable" class="table table-striped" style="width:100%">
    <thead>
    <tr>
        @if(count($leads)>0)
            <th width="50px"><input class="custom_check" type="checkbox" id="master"></th>
        @endif
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Zip Code</th>
        <th>Street Address</th>
        <th>State</th>
        <th>Main Reason</th>
        <th>Average Bill</th>
        <th>Home</th>
{{--        <th>Income</th>--}}
        <th>Credit Score</th>
        <th>Home Type</th>
        <th>Electric Provider</th>
{{--        <th>Roof Type</th>--}}
{{--        <th>Trim Trees</th>--}}
        <th>Date</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    @forelse($leads as $key => $lead)
        <tr>
            <td><input type="checkbox" class="sub_chk custom_check" data-id="{{$lead->id}}"></td>
            <td>{{$key+1}}</td>
            <td>{{$lead->first_name}}</a></td>
            <td>{{$lead->last_name}}</td>
            <td>{{$lead->email}}</td>
            <td>{{$lead->phone}}</td>
            <td>{{$lead->zip_code}}</td>
            <td>{{$lead->address}}</td>
            <td>{{$lead->state}}</td>
            <td>{{$lead->main_reason}}</td>
            <td>{{$lead->avg_bill}}</td>
            <td>{{$lead->own_home}}</td>
            <td>{{$lead->credit_score}}</td>
            <td>{{$lead->home_type}}</td>
            <td>{{isset($lead->utility) ? $lead->utility->utility_name : 'Other'}}</td>
            @php
                $dt=$lead->created_at->setTimezone(new DateTimeZone('US/Central'))
            @endphp
            <td>
                {{date('d-m-Y h:i a ', strtotime($dt))}}
            </td>
            <td>
                <i class="fa-solid {{($lead->is_qualify == 1) ? ('fa-square-check text-success') : (($lead->is_qualify == null) ? 'fa-solid fa-exclamation text-warning' : 'fa-square-xmark text-danger') }} fa-2x"></i>
            </td>
        </tr>
    @empty
    @endforelse
</table>
