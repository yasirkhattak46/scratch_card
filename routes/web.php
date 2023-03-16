<?php

use App\Http\Controllers\RestaurantsController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\WinnersController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/route-cache', function() {
    Cache::flush();
    Artisan::call('cache:clear');
    Artisan::call('optimize:clear');
    Artisan::call('route:clear');
    Route::clearResolvedInstances();
    return 'Routes cache cleared';
});
Route::get('login',[App\Http\Controllers\AdminController::class,'login']);
Route::post('login_action',[App\Http\Controllers\AdminController::class,'login_action'])->name('login_action');
Route::post('logout',[App\Http\Controllers\AdminController::class,'logout'])->name('logout');



//Auth::routes();

Route::group([
    'middleware' => ['EnsureLogin'],
    'prefix' => 'admin'], function() {
    Route::get('/',[App\Http\Controllers\HomeController::class,'index']);
    Route::get('/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('profile');
    Route::post('/update_profile', [App\Http\Controllers\AdminController::class, 'update_profile'])->name('update_profile');
    Route::get('/working_hours/{id}', [App\Http\Controllers\HomeController::class, 'working_hours'])->name('working_hours');
    Route::post('/save_working_hour', [App\Http\Controllers\HomeController::class, 'save_working_hour'])->name('save_working_hour');
    Route::controller(QuizController::class)->group(function(){
        Route::get('/quiz_list','quiz_list')->name('quiz_list');
        Route::get('/create_quiz', 'create_quiz')->name('create_quiz');
        Route::post('/save_quiz', 'save_quiz')->name('save_quiz');
        Route::get('/quiz_edit/{id}', 'quiz_edit')->name('quiz_edit');
        Route::post('/quiz_delete', 'quiz_delete')->name('quiz_delete');
    });
    Route::resources([
        'winners' => WinnersController::class,
    ]);
    Route::resources([
        'restaurants' => RestaurantsController::class,
    ]);
    Route::post('/restaurant_delete', [App\Http\Controllers\RestaurantsController::class, 'restaurant_delete'])->name('restaurant_delete');
});




Route::get('/', [App\Http\Controllers\HomeController::class, 'front'])->name('front');
Route::get('/restaurant_scratch/{id}', [App\Http\Controllers\RestaurantsController::class, 'restaurant_scratch'])->name('restaurant_scratch');
Route::post('/winner_details', [App\Http\Controllers\WinnersController::class, 'winner_details'])->name('winner_details');
Route::view('/hamza', 'home' );
Route::post('/validate_restaurant', [App\Http\Controllers\RestaurantsController::class, 'validate_restaurant'])->name('validate_restaurant');



