<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Advantage extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'service_id',
        'status',
        
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
