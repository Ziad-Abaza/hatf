<?php

namespace App\Providers;

use App\Models\Blog;
use App\Observers\BlogObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        Blog::observe(BlogObserver::class);

        View::composer('*', function ($view) {
            // Get the translation files
            $view->with('translationFiles', $this->getTranslationFiles());

        });
    }

    public function getTranslationFiles()
    {
        $path = base_path('lang/ar/frontend'); // Define the path to the directory
        $files = File::allFiles($path); // Get all files in the directory

        // Extract just the file names without the '.php' extension
        $fileNames = array_map(function ($file) {
            return pathinfo($file->getFilename(), PATHINFO_FILENAME); // Get file name without extension
        }, $files);

        return $fileNames; // Return the array of file names without extension
    }
}
