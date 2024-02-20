<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\linkController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\recipientController;
use App\Http\Controllers\bloodtypeController;
use App\Http\Controllers\donationController;
use App\Http\Controllers\donationcenterController;
use App\Http\Controllers\donationrecordController;
use App\Http\Controllers\TestController;


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




// Routes For Inserting Data.
Route::post('/add_user',[UserController::class,'AddUser'])->name('add.user');
Route::post('/add_donor',[DonorController::class,'addDonor'])->name('add.donor');
Route::post('/add_recipient',[recipientController::class,'addRecipient'])->name('add.recipient');
Route::post('/add_blood_type',[bloodtypeController::class,'addBloodType'])->name('add.blood_type');
Route::post('/add_donation',[donationController::class,'addDonation'])->name('add.donation');
Route::post('/add_donation_center',[donationcenterController::class,'addDonationCenter'])->name('add.donation_center');
Route::post('add_donation_record',[donationrecordController::class,'addDonationRecord'])->name('add.donation_record');



// Routes For Show Tables Data.
Route::get('/users',[UserController::class,'showUser'])->name('show.user');
Route::get('/donors',[DonorController::class,'showDonors'])->name('show.donors');
Route::get('/recipients',[recipientController::class,'showRecipients'])->name('show.recipients');
Route::get('/blood_type',[bloodtypeController::class,'showBloodtype'])->name('show.bloodtype');
Route::get('/donations',[donationController::class,'showDonation'])->name('show.donations');
Route::get('/donation_center',[donationcenterController::class,'showDonationcenter'])->name('show.donationcenter');
Route::get('/donation_record',[donationrecordController::class,'showdonationRecord'])->name('show.donationrecord');



// Routes For Edit Data
Route::post('/update-user/{id}',[UserController::class,'EditUser'])->name('edit.user');
Route::post('/update-donor/{id}',[DonorController::class,'addDonor'])->name('edit.donor');
Route::post('/update-recipient/{id}',[recipientController::class,'addRecipient'])->name('edit.recipient');
Route::Post('/update-blood-type/{id}',[bloodtypeController::class,'addBloodType'])->name('edit.blood_type');
Route::post('/update-donation/{id}',[donationController::class,'addDonation'])->name('edit.donation');
Route::post('/update-donation-center/{id}',[donationcenterController::class,'addDonationCenter'])->name('edit.center');
Route::post('/update-donation-record/{id}',[donationrecordController::class,'addDonationRecord'])->name('edit.record');



// Routes For Deleting Data
Route::get('/delete_user/{id}',[UserController::class,'DeleteUser'])->name('delete.user');
Route::get('/delete_donor/{id}',[DonorController::class,'DeleteDonor'])->name('delete.donor');
Route::get('/delete_recipient/{id}',[recipientController::class,'DeleteRecip'])->name('delete.recipient');
Route::get('/delete_blood_type/{id}',[bloodtypeController::class,'DeleteBlood'])->name('delete.blood');
Route::get('/delete_donation/{id}',[donationController::class,'DeleteDonation'])->name('delete.donation');
Route::get('/delete_center/{id}',[donationcenterController::class,'DeleteCenter'])->name('delete.center');
Route::get('/delete_record/{id}',[donationrecordController::class,'DeleteRecord'])->name('delete.record');



// Routes For Show Add Forms.
Route::get('/add-user',[UserController::class,'UserForm'])->name('new.user');
Route::get('/add-donor',[DonorController::class,'DonorsForm']);
Route::get('/add-recipient',[recipientController::class,'RecipientForm']);
Route::get('/add-blood_type',[bloodtypeController::class,'BloodForm']);
Route::get('/add-donation',[donationController::class,'DonationForm']);
Route::get('/add-donation_center',[donationcenterController::class,'CenterForm']);
Route::get('/add-donation_record',[donationrecordController::class,'RecordForm']);



// Routes For Show Edit Form.
Route::get('/edit-user/{id}',[UserController::class,'UserEditForm'])->name('user.edit.form');
Route::get('/edit-donor/{id}',[DonorController::class,'DonorEditForm'])->name('donor.edit.form');
Route::get('edit-recipient/{id}',[recipientController::class,'RecipEditForm'])->name('recipient.edit.form');
Route::get('edit-blood-type/{id}',[bloodtypeController::class,'BloodEditForm'])->name('blood.edit.form');
Route::get('edit-donation/{id}',[donationController::class,'DonationEditForm'])->name('donation.edit.form');
Route::get('/edit-donation-center/{id}',[donationcenterController::class,'CenterEditForm'])->name('center.edit.form');
Route::get('/edit-donation-record/{id}',[donationrecordController::class,'RecordEditForm'])->name('record.edit.form');























//Route::get('/update_user',[UserController::class,'UserForm'])->name('update.user');
//Route::get('/update_donor',[DonorController::class,'DonorsForm'])->name('update.donor');
//Route::get('/update_recipient',[recipientController::class,'RecipientForm'])->name('update.recipient');










//Testing Route.
Route::get('/data',[TestController::class,'index']);










































































































