<?php
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\GalleryCategoryController;
use App\Http\Controllers\Backend\PagesController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\SubCategories;
use App\Http\Controllers\Backend\TestimonialsController;
use App\Http\Controllers\Backend\UserProfileController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::put('category/change-status', [CategoryController::class, 'changeStatus'])->name('category.change-status');
Route::resource('category', CategoryController::class);

Route::put('subcategory/change-status', [SubCategories::class, 'changeStatus'])->name('subcategory.change-status');
Route::resource('subcategory', SubCategories::class);


Route::put('product/change-status', [ProductController::class, 'changeStatus'])->name('product.change-status');
Route::resource('product', ProductController::class);


Route::get('get-subcategories', [ProductController::class, 'getSubcategories'])->name('product.getSubcategories');




Route::delete('blog/images/{id}/delete', [BlogsController::class, 'MultipleImageDestroy'])->name('blog.images.destroy');
Route::put('blog/change-status', [BlogsController::class, 'changeStatus'])->name('blog.change-status');
Route::resource('blogs', BlogsController::class);
Route::put('slider/change-status', [SliderController::class, 'changeStatus'])->name('slider.change-status');
Route::resource('slider', SliderController::class);
Route::delete('images/{id}/delete', [GalleryController::class, 'MultipleImageDestroy'])->name('images.destroy');
Route::put('gallery/change-status', [GalleryController::class, 'changeStatus'])->name('gallery.change-status');
Route::put('multiple-image/change-status', [GalleryController::class, 'MultipleImageChangeStatus'])->name('multiple-image.change-status');
Route::resource('galleries', GalleryController::class);
Route::put('page/change-status', [PagesController::class, 'changeStatus'])->name('page.change-status');
Route::resource('pages', PagesController::class);
Route::put('testimonial/change-status', [TestimonialsController::class, 'changeStatus'])->name('testimonial.change-status');
Route::resource('testimonials', TestimonialsController::class);
Route::put('service/change-status', [ServiceController::class, 'changeStatus'])->name('service.change-status');
Route::resource('service', ServiceController::class);



Route::get('settings',[SettingsController::class,'index'])->name('settings.index');
Route::put('web/settings/{id}', [SettingsController::class, 'webUpdate'])->name('web.settings.update');
Route::put('smtp/settings/{id}', [SettingsController::class, 'smtpUpdate'])->name('smtp.settings.update');
Route::put('social/settings/{id}', [SettingsController::class, 'socialUpdate'])->name('social.settings.update');

Route::get('enquiry', [ContactController::class, 'index'])->name('enquiry.index');


Route::post('send-mail', [ContactController::class, 'sendMail'])->name('send.mail');


// Display user profile page
Route::get('profile', [UserProfileController::class, 'index'])->name('user.profile');

// Update user profile
Route::put('profile/update', [UserProfileController::class, 'updateProfile'])->name('user.profile.update');

// Update user profile password
Route::post('profile/update-password', [UserProfileController::class, 'updatePassword'])->name('user.profile.update.password');
