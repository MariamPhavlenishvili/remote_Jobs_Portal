<?php

use App\Models\Category;
use App\Models\jobs;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/auth', [App\Http\Controllers\HomeController::class, 'auth']);
Route::post('/post_job', [App\Http\Controllers\jobsController::class, 'storeJob']);
Route::get('/create_Job', [App\Http\Controllers\jobsController::class, 'createJob']);
Route::get('/my_posted_jobs', [App\Http\Controllers\jobsController::class, 'jobsView']);
Route::get('/my_posted_jobs/delete/{id}', [App\Http\Controllers\jobsController::class, 'deleteJob']);
Route::get('/my_posted_jobs/details/{id}', [App\Http\Controllers\jobsController::class, 'my_job_details']);
Route::get('/job_details/{id}', [App\Http\Controllers\jobsController::class, 'job_details']);
Route::get('/my_posted_jobs/edit/{id}', [App\Http\Controllers\jobsController::class, 'editJob']);
Route::get('/all_jobs', [App\Http\Controllers\jobsController::class, 'allJobs']);
Route::get('test/{id}', [App\Http\Controllers\jobsController::class, 'categoryFilter']);
Route::post('/my_posted_jobs/updated/{id}', [App\Http\Controllers\jobsController::class, 'updateJob']);
