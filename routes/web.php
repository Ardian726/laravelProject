<?php

use App\Http\Livewire\Pages\AboutComponent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\FaqComponent;
use App\Http\Livewire\Pages\HomeComponent;
use App\Http\Livewire\Pages\LoginComponent;
use App\Http\Livewire\Pages\SignupComponent;
use App\Http\Livewire\Pages\ContactComponent;
use App\Http\Livewire\Pages\ContactFormComponent;
use Monolog\Handler\RotatingFileHandler;

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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});
Route::get("/signup", SignupComponent::class)->name("signup");

Route::get("/login", LoginComponent::class)->name("login");

Route::middleware(['auth'])->group(function () {
    Route::get("/dashboard", HomeComponent::class)->name("dashboard");
    Route::get("/contact", ContactComponent::class)->name("contact");
    Route::get("/contactForm", ContactFormComponent::class)->name("contactForm");
    Route::get("/about", AboutComponent::class)->name("about");
});

// Route::get("/faq", FaqComponent::class)->name("faq");

// Route::post("/send-message", ContactFormComponent::class, "sendEmail")->name("contact.send");
