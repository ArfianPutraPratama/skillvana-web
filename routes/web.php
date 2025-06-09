<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\BootcampController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\WebDesignController;
use App\Http\Controllers\CertificateController;

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/team', function () {
    return view('team');
});
Route::get('/testimoni', function () {
    return view('testimoni');
});
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'sendContact'])->name('contact.send');
Route::get('/web-design', [WebDesignController::class, 'index'])->name('web-design');
Route::get('/seminar-detail', function () {
    return view('seminar-detail');
})->name('seminar-detail');
Route::get('/seminar', [SeminarController::class, 'index'])->name('seminar.index');
Route::get('/seminar/{id}', [SeminarController::class, 'show'])->name('seminar.detail');
Route::get('/bootcamp', [BootcampController::class, 'index'])->name('bootcamp.index');
Route::get('/bootcamp/{id}/deskripsi', [BootcampController::class, 'show'])->name('bootcamp-deskripsi');
Route::get('/bootcamp/{id}/detail', [BootcampController::class, 'detail'])->name('bootcamp-detail');
Route::get('/bootcamp/progress/{bootcamp}', [BootcampController::class, 'getProgress']);
Route::middleware(['web'])->group(function () {
    Route::post('/bootcamp/save-progress/{bootcamp}', [BootcampController::class, 'saveProgress']);
});
Route::get('/course-card', function () {
    return view('course-card');
})->name('course-card');
Route::get('/pay', function () {
    return view('payment');
});
Route::post('/get-snap-token', [PaymentController::class, 'getSnapToken'])->middleware('auth');
Route::post('/certificate/claim/{bootcampId}', [CertificateController::class, 'claim'])
    ->middleware('auth')
    ->name('certificate.claim');
Route::post('/certificate/cleanup', [CertificateController::class, 'cleanup'])->middleware('auth');
Route::post('/purchase', [PurchaseController::class, 'purchase']);
Route::post('/check-payment-status', [PurchaseController::class, 'checkPaymentStatus']);
Route::get('/refresh-csrf', function () {
    return response()->json(['token' => csrf_token()]);
});
Route::get('/ping', function () {
    return response()->json(['status' => 'ok']);
})->middleware('auth');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('/home', [AuthController::class, 'dashboard'])->middleware('auth');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
