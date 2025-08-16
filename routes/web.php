<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\salaryController;

Route::get('/view/users',function(){

    return response()->json([
         'message'=>'this is belay',
         'status'=>200
    ]);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/save',[salaryController::class,'handleSalary']);