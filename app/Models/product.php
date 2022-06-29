<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable =[
        'catid',
        'name',
        'description',
        'buyingPrice',
        'sellingPrice',
        'image',
        'qty',
        'status',
        'trending',
        'isActive',
        'meta_title',
        'meta_keyWord',
        'meta_description',
    ];

    public function catergory()
    {
        return $this->belongsTo(catergory::class,'catid','id');
    }
}
