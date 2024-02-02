<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blood_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'blood_group',
        'rh_factor',
    ];
}
