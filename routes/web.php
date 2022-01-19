<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TenantController;
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
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


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
    // Route::get('add-User',[UserController::class, 'addUser']);
    // Route::post('save-User',[UserController::class, 'saveUser']);
    // Route::get('edit-User/{id}',[UserController::class, 'editUser']);
    // Route::post('update-User/{id}',[UserController::class, 'updateUser']);
    // Route::get('delete-User/{id}',[UserController::class, 'deleteUser']);
    Route::post('update-user-tenant/{id}',[UserController::class, 'updateUserTenant']);


    //Influencer Type Controllers
    Route::get('/influencer-types',[InfluencerTypeController::class, 'index']);
    Route::get('add-influencer-type',[InfluencerTypeController::class, 'addInfluencerType']);
    Route::post('save-influencer-type',[InfluencerTypeController::class, 'saveInfluencerType']);
    Route::get('edit-influencer-type/{id}',[InfluencerTypeController::class, 'editInfluencerType']);
    Route::post('update-influencer-type/{id}',[InfluencerTypeController::class, 'updateInfluencerType']);
    Route::get('delete-influencer-type/{id}',[InfluencerTypeController::class, 'deleteInfluencerType']);
 });