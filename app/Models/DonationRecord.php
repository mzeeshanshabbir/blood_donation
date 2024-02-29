<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Recipient;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function Recipients(): hasOne
    {
        return $this->hasOne(Recipient::class,'id','recipient_id');
    }
    public function Donations(): hasOne
    {
        return $this->hasOne(Donation::class,'id','donation_id');
    }

}
