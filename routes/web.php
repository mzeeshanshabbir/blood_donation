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
use \App\Http\Controllers\TestController;





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


// Pre Made Routes.
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
Route::get('/users',[UserController::class,'showUser'])->name('show.user');
Route::get('/donors',[DonorController::class,'showDonors'])->name('show.donors');
Route::get('/recipients',[recipientController::class,'showRecipients'])->name('show.recipients');
Route::get('/blood_type',[bloodtypeController::class,'showBloodtype'])->name('show.bloodtype');
Route::get('/donations',[donationController::class,'showDonation'])->name('show.donations');
Route::get('/donation_center',[donationcenterController::class,'showDonationcenter'])->name('show.donationcenter');
Route::get('/donation_record',[donationrecordController::class,'showdonationRecord'])->name('show.donationrecord');



//Routes For Buttons.
Route::get('/new_user','add_user');
Route::get('/new_donor',[DonorController::class,'DonorsForm']);
Route::get('/new_recipient',[recipientController::class,'RecipientForm']);
Route::get('/new_blood_type',[bloodtypeController::class,'BloodForm']);
Route::get('/new_donation',[donationController::class,'DonationForm']);
Route::get('/new_donation_center',[donationcenterController::class,'CenterForm']);
Route::get('/new_donation_record',[donationrecordController::class,'RecordForm']);



//Routes For Inserting Data.
Route::post('/add_user',[UserController::class,'AddUser'])->name('add.user');
Route::post('/add_donor',[DonorController::class,'addDonor'])->name('add.donor');
Route::post('/add_recipient',[recipientController::class,'addRecipient'])->name('add.recipient');
Route::post('/add_blood_type',[bloodtypeController::class,'addBloodType'])->name('add.blood_type');
Route::post('/add_donation',[donationController::class,'addDonation'])->name('add.donation');
Route::post('/add_donation_center',[donationcenterController::class,'addDonationCenter'])->name('add.donation_center');
Route::post('add_donation_record',[donationrecordController::class,'addDonationRecord'])->name('add.donation_record');



//Testing Route.
Route::get('/data',[TestController::class,'index']);











































































































//Routes For Update Data
Route::post('/update_user/{id}',[UserController::class,'UpdateUser'])->name('update.user');
Route::post('/update_donor/{id}',[DonorController::class,'UpdateDonor'])->name('update.donor');
Route::post('/update_recipient/{id}',[recipientController::class,'UpdateRecipient'])->name('update.recipient');
Route::post('/update_blood_type/{id}',[bloodtypeController::class,'UpdateBloodtype'])->name('update.blood_type');
Route::post('/update_donation/{id}',[donationController::class,'UpdateDonation'])->name('update.donation');
Route::post('/update_donation_center/{id}',[donationcenterController::class,'UpdateDonationCenter'])->name('update.donation_center');
Route::post('/update_donation_record/{id}',[donationrecordController::class,'UpdateDonationRecord'])->name('update.donation_record');

