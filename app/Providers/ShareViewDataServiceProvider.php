<?php

namespace App\Providers;

use App\Models\Section;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ShareViewDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // No need to register anything here for view sharing.
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Share the Agent instance with all views
        View::composer('*', function ($view) {
            $view->with('agent', new Agent());
        });

        View::composer('*', function ($view) {
            $view->with('section', Section::first());       

        });
    }
}
