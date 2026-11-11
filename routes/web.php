<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/',[StudentController::class, "ShowAllStudent"]);

Route::get("/students",[StudentController::class,"ShowAllStudent"]);
Route::get("/students/create",[StudentController::class,"create"]);
Route::post("/students",[StudentController::class,"store"]);
Route::get("/students/{id}",[StudentController::class,"ShowStudent"]);
Route::get("/students/{id}/edit",[StudentController::class,"edit"]);
Route::put("/students/{id}",[StudentController::class,"update"]);
Route::delete("/students/{id}",[StudentController::class,"destroy"]);


Route::fallback(function(){
    return "this page not found";
});
