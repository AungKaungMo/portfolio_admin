<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_title',
        'sub_title',
        'desc_1',
        'desc_2',
        'desc_3',
        'image'
    ];
}
