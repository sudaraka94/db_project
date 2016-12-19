<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Auth Routes
Route::get('/login', ['as'=>'login',function () {
    return view('auth.login');
}]);

Route::post('/loginauth', ['as'=>'loginauth','uses'=>'Auth\LoginController@login']);
Route::get('/logout', ['as'=>'logout','uses'=>'Auth\LoginController@logout']);

//malsha roots ------------------------------------------------------------------------------------------------
Route::get('/employee',function (){
    return View::make('employee/employeeLayout');
});

Route::get('employee/payment',function (){
    return View::make('employee/pages/payments');
});
Route::post('/payment',function (){
    echo 'Posted';
});
Route::get('/meterreadings',function (){
    return View::make('employee/pages/meterReadings');
});
Route::get('/customers',function (){
    return View::make('employee/pages/customers');
});
Route::get('/consumption',function (){
    return View::make('employee/pages/consumption');
});
Route::get('/connections',function (){
    return View::make('employee/pages/connections');
});

//Nethmi Roots --------------------------------------------------------------------------------------------------------
Route::get('/customer',function (){
    return View::make('customer/welcome');
});

Route::get('customer/profile/view',function (){
    return View::make('customer/Profile/view');
});

Route::get('edit',function (){
    return View::make('customer/Profile/edit');
});

Route::get('payment',function (){
    return View::make('customer/Payment/review');
});

Route::get('con-year',function (){
    return View::make('customer/Consumption/annual');
});

Route::get('con-month',function (){
    return View::make('customer/Consumption/monthly');
});

Route::get('view-con',function (){
    return View::make('customer/Connections/view-con');
});

Route::get('new-con',function (){
    return View::make('customer/Connections/new-con');
});
Route::post('/customer/newconsubmit',['as'=>'new_con_submit','uses'=>'customerController@submitCon']);

Route::get('change-con',function (){
    return View::make('customer/Connections/change-con');
});

//Sabeena Routes----------------------------------------------------------------------------------------------------------
