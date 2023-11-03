<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\GuestController;

 
Route::get('/', [GuestController::class, 'index'])->name('guest.index'); 
Route::get('/blog', [GuestController::class, 'blog'])->name('guest.blogpage');
Route::get('/contact', [GuestController::class, 'contact_page'])->name('guest.contact');
Route::get('/about', [GuestController::class, 'about_page'])->name('guest.about');
Route::get('/gallery', [GuestController::class, 'gallery_page'])->name('guest.gallery');
Route::get('/product', [GuestController::class, 'product_page'])->name('guest.product');
Route::get('/treatment', [GuestController::class, 'treatment_page'])->name('guest.treatment');
Route::post('/contact', [GuestController::class, 'storecontact'])->name('store.contact');
Route::get('/blog/{name}', [GuestController::class, 'blog_detail'])->name('guest.blog');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/admin/login/', [AuthController::class, 'login'])->name('login');
    Route::post('/admin/login/', [AuthController::class, 'loginPost'])->name('login');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('admin/home/', [HomeController::class, 'index'])->name('home');
    Route::get('/admin/product/', [HomeController::class, 'product'])->name('adminproduct');
    Route::get('/admin/add-treatment/', [HomeController::class, 'addtreatment'])->name('adminaddtreatment');
    Route::get('/admin/treatment/{id}/edit',[TreatmentController::class, 'edit'])->name('treatment.edit');
    Route::delete('/admin/treatment/{id}',[TreatmentController::class, 'destroy'])->name('treatments.destroy');
    Route::get('/admin/add-product/', [HomeController::class, 'addproduct'])->name('adminaddproduct');
    Route::post('/admin/add-product/', [HomeController::class, 'createproduct'])->name('products.create');
    Route::delete('/admin//product/{id}',[HomeController::class, 'productdestroy'])->name('products.destroy');
    Route::get('/admin/add-gallery/', [HomeController::class, 'addgallery'])->name('adminaddgallery');
    Route::get('/admin/treatment/', [TreatmentController::class, 'show'])->name('admintreatment');
    Route::delete('/admin//gallery/{id}',[HomeController::class, 'gallerydestroy'])->name('gallery.destroy');
    Route::get('/admin/gallery/', [HomeController::class, 'gallery'])->name('admingallery');
    Route::put('/admin/treatment/{id}',[TreatmentController::class, 'update'])->name('treatments.update');
    Route::post('/admin/add-gallery/', [HomeController::class, 'uploadgallery'])->name('adminpostgallery');
    Route::post('/admin/add-treatment/', [TreatmentController::class, 'store'])->name('treatments.store');
    Route::get('/admin/blog/', [HomeController::class, 'view'])->name('blog.view');
    Route::get('/admin/blog/create', [HomeController::class, 'create'])->name('blog.create');
    Route::post('/admin/blog/create', [HomeController::class, 'store'])->name('blog.store');
    Route::get('/admin//blog/{id}/edit',[HomeController::class, 'edit'])->name('blog.edit');
    Route::put('/admin/blog/{id}',[HomeController::class, 'update'])->name('blog.update');
    Route::delete('/admin//blog/{id}',[HomeController::class, 'destroy'])->name('blog.destroy');
    Route::delete('/admin/logout', [AuthController::class, 'logout'])->name('logout');
});