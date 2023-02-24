<?php

namespace App\Http\Controllers;

use App\Models\Restaurants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use mysql_xdevapi\Exception;

class RestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['restaurants'] = Restaurants::all();
        return view('restaurants.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'owner_name' => 'required',
            'owner_email' => 'required',
            'owner_phone' => 'required',
            'restaurant_name' => 'required',
//            'restaurant_logo' => 'required',
            'restaurant_address' => 'required',
            'restaurant_house_number' => 'required',
            'restaurant_city' => 'required',
            'restaurant_postal_code' => 'required',
            'google_reviews_link' => 'required',
            'menu_link' => 'required',
            'validation_code' => 'required',
//            'scratch_img' => 'required',
            'status' => 'required',
        ]);
        if ($validator->passes()) {
            try {
                if (isset($request->id)) {
                    $restaurant = Restaurants::find($request->id);
                }
//                Check Restaurant Logo
                if ($request->hasFile('restaurant_logo')) {
                    $restaurant_logo = time() . '.' . $request->restaurant_logo->extension();
                    $request->restaurant_logo->move(public_path('restaurant_logo'), $restaurant_logo);
                } elseif (isset($restaurant)) {
                    $restaurant_logo = $restaurant->restaurant_logo;
                } else {
                    $data['status'] = "Failure";
                    $data['result'] = "Restaurant Logo Required";
                    return response()->json($data);

                }
//                Check Scratch Card Image
                if ($request->hasFile('scratch_img')) {
                    $scratch_img = time() . '.' . $request->scratch_img->extension();
                    $request->scratch_img->move(public_path('scratch_img'), $scratch_img);
                } elseif (isset($restaurant)) {
                    $scratch_img = $restaurant->scratch_img;
                } else {
                    $data['status'] = "Failure";
                    $data['result'] = "Scratch Image Required";
                    return response()->json($data);
                }
                Restaurants::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'owner_name' => $request->owner_name,
                        'owner_email' => $request->owner_email,
                        'owner_phone' => $request->owner_phone,
                        'restaurant_name' => $request->restaurant_name,
                        'restaurant_logo' => $restaurant_logo,
                        'restaurant_address' => $request->restaurant_address,
                        'restaurant_house_number' => $request->restaurant_house_number,
                        'restaurant_city' => $request->restaurant_city,
                        'restaurant_times' => $request->restaurant_times,
                        'restaurant_postal_code' => $request->restaurant_postal_code,
                        'google_reviews_link' => $request->google_reviews_link,
                        'menu_link' => $request->menu_link,
                        'validation_code' => $request->validation_code,
                        'scratch_img' => $scratch_img,
                        'status' => $request->status,
                    ]);
                $data['status'] = "Success";
                $data['result'] = "Restaurant Added";
            } catch (Exception $exception) {
                $data['status'] = "Failure";
                $data['result'] = $exception;
            }
        } else {
            $data['status'] = "validator";
            $data['result'] = $validator->errors()->toJson();
        }
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Restaurants $restaurants
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurants $restaurants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Restaurants $restaurants
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['restaurant'] = Restaurants::find($id);
        return view('restaurants.create', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Restaurants $resturants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurants $restaurants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Restaurants $restaurants
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurants $restaurants)
    {

    }
    public function restaurant_delete(Request $request)
    {
        Restaurants::find($request->id)->delete();
        $data['status'] = "Success";
        $data['result'] = "Restaurant Delete Successfully";
        return response()->json($data);
    }


}
