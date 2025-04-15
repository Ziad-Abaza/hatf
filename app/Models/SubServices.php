<?php

namespace App\Models;

use App\Models\Service;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubServices extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'service_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    /**
     * Register the media collections for this model.
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('sub_services')->singleFile(); // Single image per sub-service
    }
}
