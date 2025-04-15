<?php

namespace App\Observers;

use App\Models\Blog;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
class BlogObserver
{
    /**
     * Handle the Blog "created" event.
     */
    public function created(Blog $blog): void
    {
        $this->generateSitemap();

    }

    /**
     * Handle the Blog "updated" event.
     */
    public function updated(Blog $blog): void
    {
        $this->generateSitemap();

    }

    /**
     * Handle the Blog "deleted" event.
     */
    public function deleted(Blog $blog): void
    {
        $this->generateSitemap();

    }

    /**
     * Handle the Blog "restored" event.
     */
    public function restored(Blog $blog): void
    {
        $this->generateSitemap();

    }

    /**
     * Handle the Blog "force deleted" event.
     */
    public function forceDeleted(Blog $blog): void
    {
        $this->generateSitemap();

    }

    private function generateSitemap()
    {
        Sitemap::create()
            ->add(Url::create('/')->setPriority(1.0)->setChangeFrequency('daily'))
            ->add(Url::create('/blogns')->setPriority(0.8)->setChangeFrequency('weekly'))
            ->add(
                Blog::all()->map(function (Blog $blog) {
                    return Url::create(route('blogns.show', ['blogn' => $blog->id, 'title' => $blog->title_en]))
                        ->setLastModificationDate($blog->updated_at)
                        ->setChangeFrequency('weekly')
                        ->setPriority(0.7);
                })->toArray()
            )
            ->writeToFile(public_path('sitemap.xml'));
    }
}
