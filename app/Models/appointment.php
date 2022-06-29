<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;

    protected $fillable =[
        'docName',
        'pName',
        'pAge',
        'pMobile',
        'pAddress',
        'pGender',
        'pStatus',
        'appointmentDate',
        'appointmentTime'
    ];
}
