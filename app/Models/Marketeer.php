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
        'commission_rate'
    ];

    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class);
    }

    public function commissions()
    {
        return $this->hasMany(Commission::class);
    }

    public function getTotalCommissionAttribute()
    {
        return $this->commissions()->sum('amount');
    }
}
