<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctorDetails extends Model
{
    use HasFactory;

    protected $fillable=[
        'docName',
        'docHospital',
        'docCatergory',
        'docQulification',
        'docPhoto',
    ];
}
