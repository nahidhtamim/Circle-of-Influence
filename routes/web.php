<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\Admin\TenantController;
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

    Route::get('/dashboard', 'Admin\DashboardController@index');
 
    Route::get('/tenants', 'Admin\TenantController@index');
    Route::get('add-tenant', 'Admin\TenantController@addTenant');
    Route::post('save-tenant', 'Admin\TenantController@saveTenant');
    Route::get('edit-tenant/{id}',[TenantController::class, 'editTenant']);

 });