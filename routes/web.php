<?php



use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




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



Route::get('/',[App\Http\Controllers\MainController::class,"index"]);

Route::get('/showpost/{post}',[App\Http\Controllers\MainController::class,"show"]);



Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get("/editprofile",[App\Http\Controllers\HomeController::class,"editprofile"]);



Route::get("/updateprofile",[App\Http\Controllers\HomeController::class,"updateprofile"])->name("updateprofile");



Route::get("/profile/{username}",[App\Http\Controllers\UserController::class,"index"]);


