<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uniqid',
        'transaction_number',
        'status',
        'invoice_number',
        'amount',
        'service',
        'name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'country',
        'zip',
        'ip_address',
        'failed_attempts',
        'expenses',
        'customer_id'
    ];


    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function commission()
    {
        return $this->hasOne(Commission::class);
    }
}
