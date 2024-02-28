<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Recipient;

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

    public function Recipientt(): BelongsTo
    {
        return $this->belongsTo(Recipient::class,'id','recipient_id');
    }

}
