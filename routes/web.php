<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\linkController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\RecipientController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DonationCenterController;
use App\Http\Controllers\DonationRecordController;
use App\Http\Controllers\TestController;

// Pre Made Routes.
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes For Inserting Data.
    Route::post('/add_user',[UserController::class,'AddUser'])->name('add.user');
    Route::post('/add_donor',[DonorController::class,'addDonor'])->name('add.donor');
    Route::post('/add_recipient',[RecipientController::class,'addRecipient'])->name('add.recipient');
    Route::post('/add_donation',[DonationController::class,'addDonation'])->name('add.donation');
    Route::post('/add_donation_center',[DonationCenterController::class,'addDonationCenter'])->name('add.donation_center');
    Route::post('/add_donation_record',[DonationRecordController::class,'addDonationRecord'])->name('add.donation_record');


    // Routes For Show Tables Data.
    Route::get('/users',[UserController::class,'showUser'])->name('show.user');
    Route::get('/donors',[DonorController::class,'showDonors'])->name('show.donors');
    Route::get('/recipients',[RecipientController::class,'showRecipients'])->name('show.recipients');
    Route::get('/donations',[DonationController::class,'showDonation'])->name('show.donations');
    Route::get('/donation_center',[DonationCenterController::class,'showDonationcenter'])->name('show.donationcenter');
    Route::get('/donation_record',[DonationRecordController::class,'showdonationRecord'])->name('show.donationrecord');


    // Routes For Edit Data
    Route::post('/update-user/{id}',[UserController::class,'EditUser'])->name('edit.user');
    Route::post('/update-donor/{id}',[DonorController::class,'addDonor'])->name('edit.donor');
    Route::post('/update-recipient/{id}',[RecipientController::class,'addRecipient'])->name('edit.recipient');
    Route::post('/update-donation/{id}',[DonationController::class,'addDonation'])->name('edit.donation');
    Route::post('/update-donation-center/{id}',[DonationCenterController::class,'addDonationCenter'])->name('edit.center');
    Route::post('/update-donation-record/{id}',[DonationRecordController::class,'addDonationRecord'])->name('edit.record');


    // Routes For Deleting Data
    Route::get('/delete_user/{id}',[UserController::class,'DeleteUser'])->name('delete.user');
    Route::get('/delete_donor/{id}',[DonorController::class,'DeleteDonor'])->name('delete.donor');
    Route::get('/delete_recipient/{id}',[RecipientController::class,'DeleteRecip'])->name('delete.recipient');
    Route::get('/delete_donation/{id}',[DonationController::class,'DeleteDonation'])->name('delete.donation');
    Route::get('/delete_center/{id}',[DonationCenterController::class,'DeleteCenter'])->name('delete.center');
    Route::get('/delete_record/{id}',[DonationRecordController::class,'DeleteRecord'])->name('delete.record');


    // Routes For Show Add Forms.
    Route::get('/add-user',[UserController::class,'UserForm'])->name('new.user');
    Route::get('/add-donor',[DonorController::class,'DonorsForm']);
    Route::get('/add-recipient',[RecipientController::class,'RecipientForm']);
    Route::get('/add-donation',[DonationController::class,'DonationForm']);
    Route::get('/add-donation_center',[DonationCenterController::class,'CenterForm']);
    Route::get('/add-donation_record',[DonationRecordController::class,'RecordForm']);


    // Routes For Show Edit Form.
    Route::get('/edit-user/{id}',[UserController::class,'UserEditForm'])->name('user.edit.form');
    Route::get('/edit-donor/{id}',[DonorController::class,'DonorEditForm'])->name('donor.edit.form');
    Route::get('edit-recipient/{id}',[RecipientController::class,'RecipEditForm'])->name('recipient.edit.form');
    Route::get('edit-donation/{id}',[DonationController::class,'DonationEditForm'])->name('donation.edit.form');
    Route::get('/edit-donation-center/{id}',[DonationCenterController::class,'CenterEditForm'])->name('center.edit.form');
    Route::get('/edit-donation-record/{id}',[DonationRecordController::class,'RecordEditForm'])->name('record.edit.form');


});
Route::get('/logout',[logoutController::class,'logout'])->name('logoutt');
require __DIR__.'/auth.php';
Route::get('/register',[linkController::class,'showregister']);












































































































