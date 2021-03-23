<?php

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

Route::middleware('auth')->group(function (){

    Route::get('/', function () {
        return view('index');
    });

    // profile routes
    Route::get('profile','UserController@profile')->name('profile');
    Route::post('profile/update','UserController@updateProfile')->name('update.profile');
    Route::get('password','UserController@password')->name('password');
    Route::put('password/update','UserController@updatePassword')->name('update.password');
    // setting routes
    Route::get('setting/index', 'SettingController@setting')->name('setting.index');

    Route::match(['get','post'],'setting/branding','SettingController@settingBranding')->name('setting.branding');
    Route::match(['get','post'],'setting/localization','SettingController@settingLocalization')->name('setting.localization');

    //Contractor
    Route::resource('contractor','ContractorController');
    Route::get('contractor/restore/{id}','ContractorController@restore')->name('contractor.restore');
    Route::get('contractor/force-delete/{id}','ContractorController@forceDelete')->name('contractor.forceDelete');

    //Location
    Route::resource('location','LocationController');
    Route::get('location/restore/{id}','LocationController@restore')->name('location.restore');
    Route::get('location/force-delete/{id}','LocationController@forceDelete')->name('location.forceDelete');

    //Hospital
    Route::resource('hospital','HospitalController');
    Route::get('hospital/restore/{id}','HospitalController@restore')->name('hospital.restore');
    Route::get('hospital/force-delete/{id}','HospitalController@forceDelete')->name('hospital.forceDelete');

    //Department
    Route::resource('department','DepartmentController');
    Route::get('department/restore/{id}','DepartmentController@restore')->name('department.restore');
    Route::get('department/force-delete/{id}','DepartmentController@forceDelete')->name('department.forceDelete');

    //Vendor
    Route::resource('vendor','VendorController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
