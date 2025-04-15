<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'title_ar',
        'descraption_en',
        'descraption_ar',
        'img',
    ];

    
}
