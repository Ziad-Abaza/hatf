<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Spatie\ImageOptimizer\OptimizerChainFactory;

class OptimizeStoredImages extends Command
{
    protected $signature = 'images:optimize {directory?}';
    protected $description = 'Optimize all images in the specified directory or the public disk by default';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $directory = $this->argument('directory') ?: 'public/images'; // default directory
        
        // Create an optimizer chain instance
        $optimizerChain = OptimizerChainFactory::create();
        
        // Get all image files in the directory
        $files = Storage::allFiles($directory);
        
        $this->info("Optimizing images in directory: $directory");

        foreach ($files as $file) {
            if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                $this->info("Optimizing: $file");

                // Get the full path for local disk
                $filePath = storage_path("app/$file");

                // Optimize the image
                $optimizerChain->optimize($filePath);
            }
        }

        $this->info('Image optimization completed.');
    }
}
