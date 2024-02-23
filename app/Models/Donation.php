<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BloodType;

class Donation extends Model
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
        'donor_id',
        'donation_date',
        'blood_type_id',
        'quantity_in_ml',
        'status',
    ];
}
