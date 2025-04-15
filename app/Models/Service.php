<?php

namespace App\Models;

use App\Models\Review;
use App\Models\features;
use App\Models\Question;
use App\Models\Advantage;
use App\Models\SubServices;
use App\Models\ServiceBaner;
use App\Models\ServiceSectshion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'image',
        'desc',
        'icon_number',
    ];

    public function subServices()
    {
        return $this->hasMany(SubServices::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    
    public function customerAdvantages()
    {
        return $this->hasMany(Advantage::class)->where('status', 'you');
    }
    public function ourAdvantages()
    {
        return $this->hasMany(Advantage::class)->where('status', 'our');
    }

    public function features()
    {
        return $this->hasMany(features::class);
        
    }


    public function reviews()
    {
        return $this->hasMany(Review::class);
    }


    public function serviceBaner()
    {
        return $this->hasOne(ServiceBaner::class)->latest();
        
    }

    public function serviceSectshions()
    {
        return $this->hasMany(ServiceSectshion::class);
        
    }

    
        
}
