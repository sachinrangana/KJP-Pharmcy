<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catergory extends Model
{
    use HasFactory;

    protected $table= 'catergories';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
        'popular',
        'isActive',
        'meta_title',
        'meta_description',
        'meta_keyWords',
    ];
}
