<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\linkController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\recipientController;
use App\Http\Controllers\bloodtypeController;
use App\Http\Controllers\donationController;
use App\Http\Controllers\donationcenterController;
use App\Http\Controllers\donationrecordController;





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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/logout',[logoutController::class,'logout']);

require __DIR__.'/auth.php';


Route::get('/register',[linkController::class,'showregister']);


// Routes For Show Tables Data.
Route::get('/Admin_Users/table',[UserController::class,'showUser'])->name('show.user');
Route::get('/Donors/table',[DonorController::class,'showDonors'])->name('show.donors');
Route::get('/Recipients/table',[recipientController::class,'showRecipients'])->name('show.recipients');
Route::get('/Blood_type/table',[bloodtypeController::class,'showBloodtype'])->name('show.bloodtype');
Route::get('/Donations/table',[donationController::class,'showDonation'])->name('show.donations');
Route::get('/Donation_center/table',[donationcenterController::class,'showDonationcenter'])->name('show.donationcenter');
Route::get('/Donation_record/table',[donationrecordController::class,'showdonationRecord'])->name('show.donationrecord');


//Routes For Inserting Data.
