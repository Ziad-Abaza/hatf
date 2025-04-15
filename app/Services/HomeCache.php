<?php

namespace App\Services;

use App\Models\Plan;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Review;
use App\Models\Package;
use App\Models\Partner;
use App\Models\Section;
use App\Models\Service;
use App\Models\features;
use App\Models\BusinessExhibition;
use Illuminate\Support\Facades\Cache;

class HomeCache
{



    public static function cache(string $modelClass, $data)
    {
        $dataCache = Cache::get($modelClass);

        if (!$dataCache) {
            Cache::put($modelClass, $data, now()->addDays(1));
        }

        return $data;
    }



    public static function updateHome()
    {
        Cache::forget('Header');
        Cache::put('Header', Header::first());

        Cache::forget('Footer');
        Cache::put('Footer', Footer::first());

        Cache::forget('Service');
        Cache::put('Service', Service::with('subServices', 'questions', 'customerAdvantages', 'ourAdvantages', 'serviceBaner', 'serviceSectshions')->get());

        Cache::forget('Section');
        Cache::put('Section', Section::first());

        Cache::forget('Partner');
        Cache::put('Partner', Partner::get());

        Cache::forget('Plan');
        Cache::put('Plan', Plan::get());

        Cache::forget('BusinessExhibition');
        Cache::put('BusinessExhibition', BusinessExhibition::paginate(3));

        Cache::forget('Package');
        Cache::put('Package',  Package::orderBy('order')->get());


        Cache::forget('reviews');
        Cache::put('reviews', Review::all());

        Cache::forget('features');
        Cache::put('features', features::all());
        
    }
}
