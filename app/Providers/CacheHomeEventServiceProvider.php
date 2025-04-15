<?php

namespace App\Providers;

use App\Services\HomeCache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class CacheHomeEventServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        // Listen for model events
        Model::creating(function () {
            HomeCache::updateHome();
        });

        Model::updating(function () {
            HomeCache::updateHome();
        });

        Model::deleting(function () {
            HomeCache::updateHome();
        });
    }
}
