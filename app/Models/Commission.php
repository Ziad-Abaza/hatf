<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    use HasFactory;
    protected $fillable = [
        'marketeer_id',
        'payment_id',
        'amount',
        'paid',
        'paid_at',
    ];
    public function marketeer()
    {
        return $this->belongsTo(Marketeer::class);
    }
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
