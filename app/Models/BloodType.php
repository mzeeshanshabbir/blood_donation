<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BloodType extends Model
{
    use HasFactory;

    protected $fillable = [
        'blood_group',
    ];


//     public function DonorData(): HasOne
//     {
//        return $this->hasOne(BloodType::class);
//    }



}
