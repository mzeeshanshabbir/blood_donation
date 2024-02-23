<?php

namespace App\Models;


use App\Models\BloodType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Donor extends Model
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
      'last_donation_date',
      'address',

    ];


    public function Blood_Type()
    {
        return $this->belongsTo(BloodType::class,'blood_type_id');
    }

}
