<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\notificationController;
use App\Http\Controllers\clientNotificationController;
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
    
    return view('login');
});
//check
// Route::get('/client-form', function () {
//     return view('addClient');
// })->middleware('auth')->name('client-form');
Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/client-form', function () {
        return view('addClient');
    })->name('client-form');
    
    
    Route::get('/updateClient', function () {
        return view('updateClient');
    })->name('updateClient');
    Route::get('/clientList', function () {
        return view('clientList');
    })->name('view-clients');
    Route::get('/addEmployee', function () {
        return view('addEmployee');
    })->name('employee-form');
    Route::get('/addNotification', function () {
        return view('addNotification');
    })->name('notification-form');
    Route::get('/addClientNotification', function () {
        return view('addClientEvent');
    })->name('client-notification-form');

    Route::get('/clientList', 'App\Http\Controllers\clientController@allData')->name('view-clients');
    Route::get('/clientList/{id}', 'App\Http\Controllers\clientController@viewClient')->name('view-client');
    Route::post('/client/add', 'App\Http\Controllers\clientController@addClient')->name('addClient');
    Route::post('/client/update/{id}', 'App\Http\Controllers\clientController@updateClient')->name('updateClient');

    Route::get('/clientNotificationList', [clientNotificationController::class,'allData'])->name('view-client-notifications');
    Route::get('/clientNotificationList/{id}', [clientNotificationController::class,'viewClientNotification'])->name('view-client-notification');
    Route::post('/clientNotification/update/{id}', [clientNotificationController::class,'updateClientNotification'])->name('updateClientNotification');
    Route::post('/clientNotification/add', [clientNotificationController::class, 'addClientNotification'])->name('addClientNotification');

    Route::get('/notificationList', [notificationController::class,'allData'])->name('view-notifications');
    Route::get('/notificationList/{id}', [notificationController::class,'viewNotification'])->name('view-notification');
    Route::post('/notification/update/{id}', [notificationController::class,'updateNotification'])->name('updateNotification');
    Route::post('/notification/add', [notificationController::class, 'addNotification'])->name('addNotification');
    
    Route::get('/employeeList', [employeeController::class,'allData'])->name('view-employees');
    Route::get('/employeeList/{id}', [employeeController::class,'viewEmployee'])->name('view-employee');
    Route::post('/employee/update/{id}', [employeeController::class,'updateEmployee'])->name('updateEmployee');
    Route::post('/employee/add', [employeeController::class, 'addEmployee'])->name('addEmployee');
    Route::get('/logout',[employeeController::class, 'logout'])->name('logout');
});

Route::get('/login',[employeeController::class, 'login'])->name('login');
Route::post('/check',[employeeController::class, 'check'])->name('check');