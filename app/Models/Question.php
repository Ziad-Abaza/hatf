<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'service_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
