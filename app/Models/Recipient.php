<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BloodType;

class Recipient extends Model
{
    use HasFactory;
    public const BLOOD_TYPE = [
        'A+',
        'A-',
        'B+',
        'B-',
        'AB+',
        'AB-',
        'O+',
        'O-',
    ];
    protected $fillable = [
      'first_name',
      'last_name',
      'date_of_birth',
      'gender',
      'contact_number',
      'email',
      'blood_type_id',
      'required_units',
      'address',
      'hospital_name',
        ];
}
