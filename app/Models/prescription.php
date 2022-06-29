<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prescription extends Model
{
    use HasFactory;

    protected $fillable =[
        'userName',
        'age',
        'gender',
        'phone',
        'address',
        'street',
        'city',
        'postalCode',
        'prescriptionDate',
        'prescription',
    ];
}
