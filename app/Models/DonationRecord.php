<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'donation_id',
        'recipient_id',
        'quantity_transfused',
        'transfusion_date',
        'transfusion_status',
    ];
}