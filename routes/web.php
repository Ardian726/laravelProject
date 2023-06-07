<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\HomeComponent;
use App\Http\Livewire\Pages\ContactComponent;
use App\Http\Livewire\Pages\ContactFormComponent;
use App\Http\Livewire\Pages\FaqComponent;

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

Route::get("/", HomeComponent::class)->name("dashboard");

Route::get("/contact", ContactComponent::class)->name("contact");

Route::get("/contactForm", ContactFormComponent::class)->name("contactForm");

Route::get("/faq", FaqComponent::class)->name("faq");

Route::post("/send-message", ContactFormComponent::class, "sendEmail")->name("contact.send");
