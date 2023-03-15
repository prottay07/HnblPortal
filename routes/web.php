<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\PhotoGalleryController;
use App\Http\Controllers\Home\NoticeBoardController;
use App\Http\Controllers\Home\TpmController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\EmployeeController;


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
    return view('frontend.index');
});

//Admin All

Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'profile')->name('admin.profile');
    Route::get('/edit/profile', 'editProfile')->name('edit.profile');
    Route::post('/store/profile', 'storeProfile')->name('store.profile');
    Route::get('/change/password', 'changePassword')->name('change.password');
    Route::post('/update/password', 'updatePassword')->name('update.password');
    Route::post('/update/password', 'updatePassword')->name('home.slide');
});

//Home Slide All

Route::controller(HomeSliderController::class)->group(function(){
    Route::get('/home/slide', 'homeSlider')->name('home.slide');
    Route::post('/update/slider', 'updateSlider')->name('update.slider');

});

//About Page All

Route::controller(AboutController::class)->group(function(){
    Route::get('/about/page', 'aboutPage')->name('about.page');
    Route::post('/update/about', 'updateAbout')->name('update.about');
    Route::get('/about', 'aboutHome')->name('home.about');
    Route::get('/about/multi-image', 'aboutMultiImage')->name('about.multi_image');
    Route::post('/store/multi/image', 'storeMultiImage')->name('store.multi.image');
    Route::get('/all/multi/image', 'allMultiImage')->name('all.multi.image');
    Route::get('/edit/multi/image/{id}', 'editMultiImage')->name('edit.multi.image');
    Route::get('/delete/multi/image/{id}', 'deleteMultiImage')->name('delete.multi.image');
    Route::post('/update/multi/image', 'updateMultiImage')->name('update.multi.image');

});

//About Page All

Route::controller(PhotoGalleryController::class)->group(function(){
    Route::get('/photo/gallery', 'showGallery')->name('photo.gallery');
    Route::get('/add/image', 'addImage')->name('add.image')->middleware('auth');
    Route::post('/store/image', 'storeImage')->name('store.gallery.image');
    Route::get('/all/image', 'showAllImage')->name('all.image')->middleware('auth');
    Route::get('/edit/image/{id}', 'editImage')->name('edit.gallery.image')->middleware('auth');
    Route::post('/update/gallery/image', 'updateGalleryImage')->name('update.gallery.image');
    Route::get('/delete/gallery/image/{id}', 'deleteGalleryImage')->name('delete.gallery.image');
    
 

});

//NoticeBoard All

Route::controller(NoticeBoardController::class)->group(function(){
    Route::get('/view/notice', 'viewAllNotice')->name('all.notices');
    Route::get('/add/notice', 'addNotice')->name('add.notices');
    Route::post('/store/notice', 'storeNotice')->name('store.notice');
    Route::get('/edit/notice/{id}', 'editNotice')->name('edit.notice');
    Route::post('/update/notice/', 'updateNotice')->name('update.notice');
    Route::get('/edit/delete/{id}', 'deleteNotice')->name('delete.notice');
    Route::get('/detail/notice/{id}', 'detailNotice')->name('notice.details');
    
    

});

//TPM All

Route::controller(TpmController::class)->group(function(){
    Route::get('/view/pillar', 'viewAllPillar')->name('view.pillars');


});

//Department All

Route::controller(DepartmentController::class)->group(function(){
    Route::get('/view/dept', 'viewDepartment')->name('view.department');
    Route::get('/add/dept', 'addDepartment')->name('add.department');
    Route::post('/store/dept', 'storeDepartment')->name('store.department');

});

//Section All

Route::controller(SectionController::class)->group(function(){
    Route::get('/view/section', 'viewSection')->name('view.section');
    Route::get('/add/section', 'addSection')->name('add.section');
    Route::post('/store/section', 'storeSection')->name('store.section');

 
});

//Employee All

Route::controller(EmployeeController::class)->group(function(){
    Route::get('/view/employee', 'viewEmployee')->name('view.employee');
    Route::get('/add/employee', 'addEmployee')->name('add.employee');
    Route::post('/store/employee', 'storeEmployee')->name('store.employee');

 
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
