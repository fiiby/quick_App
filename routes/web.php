<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\OrganizationsController;
use App\Models\Contacts;

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

Route::resource('Leads', LeadsController::class);

Route::get('/contacts', [ContactsController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('contacts.index');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/organizations', [OrganizationsController::class, 'index'])->name('organizations.index');
    Route::get('/organizations/create', [OrganizationsController::class, 'create'])->name('organizations.create');
    Route::post('/organizations', [OrganizationsController::class, 'store'])->name('organizations.store');
    Route::get('/organizations/{organization}', [OrganizationsController::class, 'show'])->name('organizations.show');
    Route::get('/organizations/{organization}/edit', [OrganizationsController::class, 'edit'])->name('organizations.edit');
    Route::put('/organizations/{organization}', [OrganizationsController::class, 'update'])->name('organizations.update');
    Route::delete('/organizations/{organization}', [OrganizationsController::class, 'destroy'])->name('organizations.destroy');

    Route::get('/leads', [LeadsController::class, 'index'])->name('leads.index');
    Route::get('/leads/create', [LeadsController::class, 'create'])->name('leads.create');
    Route::post('/leads', [LeadsController::class, 'store'])->name('leads.store');
    Route::get('/leads/{lead}', [LeadsController::class, 'show'])->name('leads.show');
    Route::get('/leads/{lead}/edit', [LeadsController::class, 'edit'])->name('leads.edit');
    Route::put('/leads/{lead}', [LeadsController::class, 'update'])->name('leads.update');
    Route::delete('/leads/{lead}', [LeadsController::class, 'destroy'])->name('leads.destroy');

    Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/create', [ContactsController::class, 'create'])->name('contacts.create');
    Route::post('/contacts', [ContactsController::class, 'store'])->name('contacts.store');
    Route::get('/contacts/{contact}', [ContactsController::class, 'show'])->name('contacts.show');
    Route::get('/contacts/{contact}/edit', [ContactsController::class, 'edit'])->name('contacts.edit');
    Route::put('/contacts/{contact}', [ContactsController::class, 'update'])->name('contacts.update');
    Route::delete('/contacts/{contact}', [ContactsController::class, 'destroy'])->name('contacts.destroy');
});


require __DIR__.'/auth.php';
