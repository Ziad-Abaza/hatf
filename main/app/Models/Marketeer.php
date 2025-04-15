<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Marketeer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'code',
    ];

    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class);
    }
}
