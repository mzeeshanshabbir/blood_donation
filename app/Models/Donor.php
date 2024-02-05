<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Donor extends Model
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
//    function DonorData(): \Illuminate\Database\Eloquent\Relations\BelongsTo
//    {
//        return $this->belongsTo(Blood_type::class,'blood_type_id');
//    }


//    protected $primaryKey = 'id';
//    function getBlood()
//    {
//        return $this->hasOne('App\Models\Blood_type','blood_type_id');
//    }

    public function profile()
    {
        return $this->hasOne(Blood_type::class);
    }
}
