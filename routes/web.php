<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\OrganizationsController;
use App\Http\Controllers\DealController;
// use App\Http\Controllers\Deals_StagesController; 
use App\Http\Controllers\ContactsController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/Leads', LeadsController::class);

Route::resource('/contacts', ContactsController::class);

// Route::get('/deals_stages', [Deals_StagesController::class, 'index'])
//     ->middleware(['auth', 'verified'])
//     ->name('deals_stages.index');

Route::resource('/organizations', OrganizationsController::class);

Route::resource('/deal', DealController::class);

