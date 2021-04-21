<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\UploadController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::group(['middleware' => 'auth'], function () {
// Only the routes that have valid authentication

    Route::get('modules/createModule/{course_id}', [ModuleController::class,'createModule'])->name('modules.createModule');
    Route::get('lessons/createLesson/{module_id}', [LessonController::class,'createLesson'])->name('lessons.createLesson');
    Route::get('uploads/createUpload/{lesson_id}', [UploadController::class,'createUpload'])->name('uploads.createUpload');
    Route::resources(['users' => UserController::class]);
    Route::resources(['courses' => CourseController::class]);
    Route::resources(['modules' => ModuleController::class]);
    Route::resources(['lessons' => LessonController::class]);
    Route::resources(['uploads' => UploadController::class]);
});

