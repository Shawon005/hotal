<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers as Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('frontend.index3');
// })->name('home');
// Route::get('/{name}', function ($name) {
//     return view('frontend.'.$name);
// });
Route::get('/',[Controller\HomeController::class, 'index'])->name('home');
Route::get('/room_list',[Controller\HomeController::class, 'room_list'])->name('room_list');
Route::get('/room/{id}',[Controller\HomeController::class, 'room'])->name('room');
Route::get('/room_cat/{id}',[Controller\HomeController::class, 'room_cat'])->name('room_cat');
Route::get('/blog/{id}',[Controller\HomeController::class, 'blog'])->name('blog');
Route::get('/blog_list',[Controller\HomeController::class, 'blog_list'])->name('blog_list');
Route::get('/blog_cat/{id}',[Controller\HomeController::class, 'blog_cat'])->name('blog_cat');
Route::get('/about',[Controller\HomeController::class, 'about'])->name('about');
Route::get('/bookings',[Controller\HomeController::class, 'booking'])->name('booking');
Route::get('/contact',[Controller\HomeController::class, 'contact'])->name('contact');
Route::get('/gallery',[Controller\HomeController::class, 'gallery'])->name('gallery');
Route::get('/place',[Controller\HomeController::class, 'place'])->name('place');
Route::get('/places/{id}',[Controller\HomeController::class, 'place_list'])->name('places');
Route::get('/restaurent',[Controller\HomeController::class, 'restaurent'])->name('restaurent');
Route::get('/language/{id}',[Controller\HomeController::class, 'lang'])->name('lang');
Route::post('bookings/store',[Controller\BookingController::class, 'store'])->name('bookings.store');
Route::resource('booking', Controller\BookingController::class);
Route::get('admin/booking/{id}',[Controller\BookingController::class, 'destroy'])->name('booking.delete');
Route::get('guest/information',[Controller\BookingController::class, 'index2'])->name('booking.guest');
Route::get('bookings/information',[Controller\BookingController::class, 'index3'])->name('booking.infos');
Route::get('bookings/cancle',[Controller\BookingController::class, 'index4'])->name('booking.cancle');
Route::get('bookings/todays/cancle',[Controller\BookingController::class, 'index5'])->name('booking.today_cancle');
Route::get('CancleStatusById/{id}',[Controller\BookingController::class, 'Cancle']);
Route::post('reviews/store',[Controller\ReviewController::class, 'store'])->name('reviews.store');
    Route::resource('review', Controller\ReviewController::class);
        Route::get('admin/review/{id}',[Controller\ReviewController::class, 'destroy'])->name('review.delete');
Route::get('/login', function () {
    return view('backend.login');
})->name('login');

Route::get('/admin/all-room', function () {
    return view('backend.room');
})->name('all_room');
Route::resource('/auth', AuthController::class);

Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware' => ['auth']], function (){
    // Route::get('admin/{name}', function ($name) {
    // return view('backend.'.$name);});
    // Route::get('/', function () {
    //     return view('backend.index');
    // })->name('dashboard');
    Route::get('/', [AuthController::class,'index'])->name('dashboard');
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');

    Route::resource('slider', Controller\SliderController::class);
    Route::get('slider/destroy/{id}',[Controller\SliderController::class, 'destroy'])->name('slider.delete');
   
    Route::resource('facility', Controller\FacilityController::class);
    Route::get('facility/destroy/{id}',[Controller\FacilityController::class, 'destroy'])->name('facility.delete');

    Route::resource('room', Controller\RoomController::class);
    Route::get('room/destroy/{id}',[Controller\RoomController::class, 'destroy'])->name('room.delete');
    Route::get('RoomStatusById/{id}',[Controller\RoomController::class, 'Status']);

    Route::get('avaiable_room',[Controller\RoomController::class, 'a_room'])->name('a_room');
    Route::get('all_room',[Controller\RoomController::class, 'room'])->name('all_room');
    Route::get('booking_room',[Controller\RoomController::class, 'booking'])->name('booking_room');

    Route::resource('service', Controller\ServiceController::class);
    Route::get('room/service/{id}',[Controller\ServiceController::class, 'destroy'])->name('service.delete');

    Route::resource('setting', Controller\SettingController::class);

    Route::resource('blog_category', Controller\BlogCategoryController::class);
    Route::get('admin/blog_category/{id}',[Controller\BlogCategoryController::class, 'destroy'])->name('blog_category.delete');

    Route::resource('blog_tag', Controller\BlogTagController::class);
    Route::get('admin/blog_tag/{id}',[Controller\BlogTagController::class, 'destroy'])->name('blog_tag.delete');

    Route::resource('blog', Controller\BlogController::class);
    Route::get('admin/blog/{id}',[Controller\BlogController::class, 'destroy'])->name('blog.delete');

    Route::resource('room_category', Controller\RoomCategoryController::class);
    Route::get('admin/room_category/{id}',[Controller\RoomCategoryController::class, 'destroy'])->name('room_category.delete');

    Route::resource('restaurant', Controller\RestaurantController::class);

    Route::resource('manu', Controller\ManuController::class);
    Route::get('admin/manu/{id}',[Controller\ManuController::class, 'destroy'])->name('manu.delete');

    Route::resource('place', Controller\PlaceController::class);
    Route::get('admin/place/{id}',[Controller\PlaceController::class, 'destroy'])->name('place.delete');

    Route::resource('gallery', Controller\GalleryController::class);
    Route::get('admin/gallery/{id}',[Controller\GalleryController::class, 'destroy'])->name('gallery.delete');

    Route::resource('language', Controller\LanguageController::class);
    
    
});
       
