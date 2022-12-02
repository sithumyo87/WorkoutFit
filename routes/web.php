<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\BMIController;
use App\Http\Controllers\Backend\BBlogController;
use App\Http\Controllers\Backend\BFoodController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\DietController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Backend\BGalleryController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Backend\BTrainingController;
use App\Http\Controllers\Backend\DashBoardController;
use App\Http\Controllers\Frontend\TrainingController;
use App\Http\Controllers\Frontend\BlogDetailController;
use App\Http\Controllers\Frontend\DietDetailController;
use App\Http\Controllers\Backend\BlogCategoryController;
use App\Http\Controllers\Backend\FoodCategoryController;
use App\Http\Controllers\Backend\TrainingCategoryController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class,'index']);
// Route::get('/', 'FrontendController@index');
// Route::get('/about', [\App\Http\Controllers\Frontend\AboutController::class,'index']);

//
// Route::get('/blog', [::class,'index']);

Route::resource('/', HomeController::class);
Route::resource('blog', BlogController::class);
Route::resource('contact', ContactController::class);
Route::resource('about', AboutController::class);
Route::resource('bmi', BMIController::class);
Route::resource('diet', DietController::class);
Route::resource('training', TrainingController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('blog_detail', BlogDetailController::class);
Route::resource('diet_detail', DietDetailController::class);

// Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
Route::resource('bgallery',BGalleryController::class);
Route::resource('dashboard',BGalleryController::class);
Route::resource('bblog',BBlogController::class);
Route::resource('trainingcat',TrainingCategoryController::class);
Route::resource('blogcat',BlogCategoryController::class);
Route::resource('btraining',BTrainingController::class);
Route::resource('bfood',BFoodController::class);
Route::resource('foodcat',FoodCategoryController::class);
// });

// Route::resource('blog', BlogController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


