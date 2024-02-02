<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donor extends Model
{
    use HasFactory;

    protected $fillable = [
      'first_name',
      'last_name',
      'date_of_birth',
      'gender',
      'contact_number',
      'email',
      'blood_type_id',
      'last_donation_date',
      'address',

    ];
}
