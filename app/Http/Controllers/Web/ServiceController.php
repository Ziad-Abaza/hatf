<?php

namespace App\Http\Controllers\Web;


use App\Models\Review;
use App\Models\Service;
use App\Models\features;
use App\Services\HomeCache;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class ServiceController extends Controller
{
    public function show($service)
    {


        $cachedServices = Cache::get('Service'); // Get all services from cache
        $service = collect($cachedServices)->firstWhere('id', $service);
        $reviews    =  HomeCache::cache('reviews', Review::all());
        $features   =  HomeCache::cache('features', features::all());

        return view('web.page.services.show', compact('service', 'features', 'reviews'));
    }
}
