<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Slidercontroller;
use App\Http\Controllers\Aboutcontroller;
use App\Http\Controllers\Achievementscontroller;
use App\Http\Controllers\successPartnersController;
use App\Http\Controllers\Donatecontroller;

use App\models\slider;
use App\models\about;
use App\Models\achievements;
use App\Models\success_partners;

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
    $images = slider::all();
    $about = about::all();
    $Achievements = Achievements::all();
    $successPartners = success_partners::all();
    return view('welcome',compact('images','about','Achievements','successPartners'));
});
Route::get('/home/donate',function(){
    return view('design.donate');
})->name('donate');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::controller(Slidercontroller::class)->middleware(['auth'])->group(function(){
    Route::get('home/slider/index','index')->name('slider.index');
    Route::post('home/slider/store','store')->name('slider.store');
    Route::post('home/slider/update/{id}','update')->name('slider.update');
    Route::post('home/slider/delete/{id}','delete')->name('slider.delete');
});
Route::controller(Aboutcontroller::class)->middleware(['auth'])->group(function () {
    Route::get('home/about/index','index')->name('about.index');
    Route::post('home/about/store','store')->name('about.store');
    Route::post('home/about/update/{id}','update')->name('about.update');
});
Route::controller(Achievementscontroller::class)->middleware(['auth'])->group(function(){
    Route::get('home/achievement/index','index')->name('achievement.index');
    Route::post('home/achievement/store','store')->name('achievement.store');
    Route::post('home/achievement/update/{id}','update')->name('achievement.update');
    Route::post('home/achievement/delete/{id}','delete')->name('achievement.delete');
});
Route::controller(successPartnersController::class)->middleware(['auth'])->group(function(){
    Route::get('home/successPartners/index','index')->name('successPartner.index');
    Route::post('home/successPartners/store','store')->name('successPartner.store');
    Route::post('home/successPartners/update/{id}','update')->name('successPartner.update');
    Route::post('home/successPartners/delete/{id}','delete')->name('successPartner.delete');
});
Route::controller(Donatecontroller::class)->middleware(['auth'])->group(function(){
    Route::get('donate/index','index')->name('donate.index');
});
Route::post('donate/store',[Donatecontroller::class,'store'])->name('donate.store');




require __DIR__.'/auth.php';
