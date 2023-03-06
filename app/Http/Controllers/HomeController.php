<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Restaurants;
use App\Models\WorkingHour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function front()
    {
        return view('welcome');
    }


    public function working_hours($id)
    {
        $data['restaurant_id'] = $id;
        $data['working_hour'] = WorkingHour::where('restaurant_id', $id)->first();
        return view('restaurants.partial.workinghours', $data);
    }

    public function save_working_hour(Request $request)
    {
        try {
            $monday = null;
            if ($request->monday == 1) {
                $monday = json_encode($request->monday_time);
            }
            $tuesday = null;
            if ($request->tuesday == 1) {
                $tuesday = json_encode($request->tuesday_time);
            }
            $wednesday = null;
            if ($request->wednesday == 1) {
                $wednesday = json_encode($request->wednesday_time);
            }
            $thursday = null;
            if ($request->thursday == 1) {
                $thursday = json_encode($request->thursday_time);
            }
            $friday = null;
            if ($request->friday == 1) {
                $friday = json_encode($request->friday_time);
            }
            $saturday = null;
            if ($request->saturday == 1) {
                $saturday = json_encode($request->saturday_time);
            }
            $sunday = null;
            if ($request->sunday == 1) {
                $sunday = json_encode($request->sunday_time);
            }
            $store = WorkingHour::updateOrCreate(
                [
                    'restaurant_id' => $request->restaurant_id,
                ]
                , [
                'restaurant_id' => $request->restaurant_id,
                'monday' => $monday,
                'tuesday' => $tuesday,
                'wednesday' => $wednesday,
                'thursday' => $thursday,
                'friday' => $friday,
                'saturday' => $saturday,
                'sunday' => $sunday,
                'status' => 1,
            ]);
            $response['status'] = 'Success';
            $response['result'] = 'Working Hours Added Successfully';
        } catch (Exception $e) {
            $response['status'] = "Failure";
            $response['result'] = $e->getMessage();
        }
        return response()->json($response);
    }

    public function quiz_list()
    {
        $data['quiz'] = Quiz::with('restaurants')->get();
        return view('quiz.scratch_quiz', $data);
    }

    public function create_quiz()
    {
        $data['restaurants'] = Restaurants::get();
        return view('quiz.create_quiz', $data);
    }

    public function quiz_edit($id)
    {
        $data['restaurants'] = Restaurants::get();
        $data['single_quiz'] = Quiz::where('id', $id)->first();
        return view('quiz.create_quiz', $data);
    }

    public function save_quiz(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'restaurant_id' => 'required',
            'title' => 'required',
            'quantity' => 'required',
            "scratch_pattern"    => "required|array|min:1",
            "scratch_pattern.*"  => "required|string|distinct|min:1",
        ]);
        if ($validator->passes()) {
            try {
                if (isset($request->id)) {
                    $quiz = Quiz::find($request->id);
                }
                if ($request->hasFile('image')) {
                    $quiz_image = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('quiz_images'), $quiz_image);
                } elseif (isset($quiz)) {
                    $quiz_image = $quiz->image;
                } else {
                    $data['status'] = "Failure";
                    $data['result'] = "Image is Required";
                    return response()->json($data);
                }
                $quiz = Quiz::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'restaurant_id' => $request->restaurant_id,
                        'title' => $request->title,
                        'quantity' => $request->quantity,
                        'scratch_pattern' => implode(',',$request->scratch_pattern),
                        'image' => $quiz_image
                    ]
                );
                $response['status'] = 'Success';
                $response['result'] = 'Quiz has been Added';
            } catch (\Exception $e) {
                $response['status'] = 'Failure';
                $response['result'] = $e;
            }
        }else{
            $response['status'] = 'validator';
            $response['result'] = $validator->errors()->toJson();
        }
        return response()->json($response);
    }

    public function quiz_delete(Request $request)
    {
        Quiz::where('id', $request->id)->delete();
        $response['status'] = 'Success';
        $response['result'] = 'Quiz Deleted Successfully';
        return response()->json($response);
    }
}
