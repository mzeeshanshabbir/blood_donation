<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationCenter extends Model
{
    use HasFactory;

     protected $fillable = [
         'center_name',
         'location',
         'contact_number',
         'email',

     ];
}
