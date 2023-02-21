<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notify Email</title>
</head>
<body>
<style>
    th,
    td {
        width: 20%;
        padding: 10px;
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
</style>

<h3 style="text-align: center">{{$data['first_name'].' '.$data['last_name']}} Has Been Qualified</h3>
<table style="margin: auto; border-collapse: collapse;">

    <tbody>
    <tr>
        <td>What is the main reason you are interested in solar?</td>
        <td>{{$data['main_reason']}}</td>
    </tr>
    <tr>
        <td>How much is your average monthly power bill?</td>
        <td>{{$data['avg_bill']}}</td>
    </tr>
    <tr>
        <td>Do you own your home?</td>
        <td>{{$data['own_home']}}</td>
    </tr>
    <tr>
        <td>What is your zip code?</td>
        <td>{{$data['zip_code']}}</td>
    </tr>
    <tr>
        <td>Please tell us your First and Last Name</td>
        <td>{{$data['first_name']}} | {{$data['last_name']}}</td>
    </tr>
    <tr>
        <td>Please tell us your email address:</td>
        <td>{{$data['email']}}</td>
    </tr>
    <tr>
        <td>What's the best number to share your results to?</td>
        <td>{{$data['phone']}}</td>
    </tr>
    <tr>
        <td>Company</td>
        <td>{{$data['company']}}</td>
    </tr>
    <tr>
        <td>Is your credit score above or below 640?</td>
        <td>{{$data['credit_score']}}</td>
    </tr>
    <tr>
        <td>What type of home do you live in?</td>
        <td>{{$data['home_type']}}</td>
    </tr>
    <tr>
        <td>What is your street address?</td>
        <td>{{$data['address']}}</td>
    </tr>
    <tr>
        <td>Select your electricity provider</td>
        <td>{{$data['provider']}}</td>
    </tr>
    <tr>
        <td>State</td>
        <td>{{$data['state']}}</td>
    </tr>
{{--    @if($data['roof_shade'] != "No Shade")--}}
{{--    <tr>--}}
{{--        <td>Are you willing to trim your trees or use a ground mount to maximize your sunlight potential?</td>--}}
{{--        <td>{{$data['trim_trees']}}</td>--}}
{{--    </tr>--}}
{{--    @endif--}}

    </tbody>
</table>
</body>
</html>
