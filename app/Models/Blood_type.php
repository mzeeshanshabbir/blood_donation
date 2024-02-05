<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Donor;
class Blood_type extends Model
{
    use HasFactory;

//     function DonorData(): HasOne
//     {
//        return $this->hasOne(Donor::class);
//    }


    protected $fillable = [
        'blood_group',
        'rh_factor',
    ];

    public function user()
    {
        return $this->belongsTo(Donor::class);
    }
}
