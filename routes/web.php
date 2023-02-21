<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrDataController;
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

});


