<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TenantController;
use App\Http\Controllers\Admin\UserInfluencerController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\InfluencerTypeController;

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

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});



Auth::routes();

Route::get('/home', [HomeController::class, 'index']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/pick-influencers', [HomeController::class, 'pickInfluencer']);
    Route::post('/save-influencers', [HomeController::class, 'saveInfluencers']);
    Route::get('/influencer-history', [HomeController::class, 'influencer_history']);
});


Route::group(['middleware' => ['auth','isAdmin']], function () {

    //Admin Dashboard Controllers
    Route::get('/dashboard',[DashboardController::class, 'index']);

    //Tenant Controllers
    Route::get('/tenants',[TenantController::class, 'index']);
    Route::get('add-tenant',[TenantController::class, 'addTenant']);
    Route::post('save-tenant',[TenantController::class, 'saveTenant']);
    Route::get('edit-tenant/{id}',[TenantController::class, 'editTenant']);
    Route::post('update-tenant/{id}',[TenantController::class, 'updateTenant']);
    Route::get('delete-tenant/{id}',[TenantController::class, 'deleteTenant']);


    //User Controllers
    Route::get('/users',[UserController::class, 'index']);
    Route::get('edit-user/{id}',[UserController::class, 'editUser']);
    Route::post('update-user/{id}',[UserController::class, 'updateUser']);
    Route::post('update-user-tenant/{id}',[UserController::class, 'updateUserTenant']);
    Route::post('change-user-role/{id}',[UserController::class, 'chaneUserTenant']);

    //Influencer Type Controllers
    Route::get('/influencer-types',[InfluencerTypeController::class, 'index']);
    Route::get('add-influencer-type',[InfluencerTypeController::class, 'addInfluencerType']);
    Route::post('save-influencer-type',[InfluencerTypeController::class, 'saveInfluencerType']);
    Route::get('edit-influencer-type/{id}',[InfluencerTypeController::class, 'editInfluencerType']);
    Route::post('update-influencer-type/{id}',[InfluencerTypeController::class, 'updateInfluencerType']);
    Route::get('delete-influencer-type/{id}',[InfluencerTypeController::class, 'deleteInfluencerType']);


    //User Influencers Controllers
    Route::get('/user-influencers',[UserInfluencerController::class, 'index']);
    Route::get('user-influencer/{id}',[UserInfluencerController::class, 'viewUserInfluencer']);
    Route::get('/user-influencers/export-personal',[UserInfluencerController::class, 'exportCsvPerosnal']);
    Route::get('/user-influencers/export-professional',[UserInfluencerController::class, 'exportCsvProfessional']);
 });