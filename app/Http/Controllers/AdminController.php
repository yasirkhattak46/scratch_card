<?php

namespace App\Http\Controllers;

use App;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Models\survey;
use mysql_xdevapi\Exception;

class AdminController extends Controller
{
    public function index()
    {
        $data['total_leads'] = survey::all()->count();
        $data['qualify'] = survey::where('is_qualify', 1)->count();
        $data['unqualify'] = survey::where('is_qualify', 0)->count();
        $data['leads'] = survey::orderBy('id', 'desc')->take('5')->get();
        return view('admin.dashboard', $data);
    }

    public function login()
    {
        return view('admin.login');
    }

    public function login_action(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->passes()) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $data['status'] = "Success";
                $data['result'] = "Logged In";
            } else {
                $data['status'] = "Failure";
                $data['result'] = "Invalid email or password";
            }
        } else {
            $data['status'] = "validator";
            $data['result'] = $validator->errors()->toJson();
        }
        return response()->json($data);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $response['status'] = "Success";
        $response['result'] = "Logout Out";
        return response()->json($response);

    }

    public function profile()
    {
        $data['profile'] = User::where('id', Auth::user()->id)->get()->first();
        return view('admin.profile', $data);
    }

    public function update_profile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|bail',
            'email' => 'required|bail',
        ]);
        if ($validator->passes()) {
            try {
                if ($request->old_password) {
                    if (isset($request->new_password) && isset($request->confirm_password)){
                        $user = User::where('id', Auth::user()->id)->get()->first();
                        if (Hash::check($request->old_password, $user->password)) {
                        if($request->new_password === $request->confirm_password){
                        $profile = [
                            'name' => $request->name,
                            'email' => $request->email,
                            'password' =>  Hash::make($request->new_password)
                        ];
                        $user = User::where('id', Auth::user()->id)->update($profile);
                            $data['status'] = 'Success';
                            $data['result'] = 'Profile Has Been Update';
                        }else{
                            $data['status'] = 'Failure';
                            $data['result'] = 'Password and Confirm Password are not Matched';
                            return response($data);
                        }
                    } else {
                        $data['status'] = 'Failure';
                        $data['result'] = 'Current Password is Incorrect';
                        return response($data);
                    }
                }else{
                        $data['status'] = 'Failure';
                        $data['result'] = 'New password & confirm password is required';
                        return response($data);
                    }
                } else {
                    $profile = [
                        'name' => $request->name,
                        'email' => $request->email,
                    ];
                    $user = User::where('id', Auth::user()->id)->update($profile);
                }
                $data['status'] = 'Success';
                $data['result'] = 'Profile Has Been Update';
            } catch (Exception $ex) {
                $data['status'] = 'Failure';
                $data['result'] = 'Error! kindly Try Again';
            }

        } else {
            $data['status'] = 'validator';
            $data['result'] = $validator->errors()->toJson();
        }
        return response()->json($data);

    }

    public function forget_password(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);
        if ($validator->passes()) {
            $user = User::where('email', '=', $request->input('email'))->get();
            if (count($user) > 0) {
                $new_password = rand(100000000, 999999999);
                User::where('user_id', $user[0]->user_id)->update([
                    'password' =>  Hash::make($new_password)
                ]);
                $this->send_password_reset_email($new_password, $user[0]->email);
                $response['status'] = "Success";
                $response['result'] = "Password sent in Email";
            } else {
                $response['status'] = "Failure";
                $response['result'] = "Invalid Email";
            }
        } else {
            $response['status'] = "Failure!";
            $response['result'] = $validator->errors()->toJson();
        }
        return response()->json($response);

    }



}
