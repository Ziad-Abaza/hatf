<?php

use App\Models\Blog;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Web\PageController;
use App\Http\Controllers\Web\PaymentController;
use App\Http\Controllers\Dashboard\CustomerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('migrateee', function () {

    try {
        Artisan::call('storage:link', [
            '--force' => true,
        ]);

        Artisan::call('migrate', [
            '--force' => true,
        ]);
    return response()->json(['message' => 'Migration ran successfully.']);
    } catch (QueryException $e) {
        return response()->json(['error' => 'Migration failed: ' . $e->getMessage()], 500);
    } catch (\Exception $e) {
        return response()->json(['error' => 'An error occurred: ' . $e->getMessage()], 500);
    }
});

Route::middleware('optimizeImages')->group(function () {
    // all images will be optimized automatically
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/blogns', [PageController::class, 'blogns'])->name('blogns');
Route::get('/blogns/{blogn}/{title?}', [PageController::class, 'show'])->name('blogns.show');

});



Route::get('/sitemap', function () {
    Sitemap::create()
        // Add homepage route
        ->add(Url::create('/')->setPriority(1.0)->setChangeFrequency('daily'))
        // Add blog index route
        ->add(Url::create('/blogns')->setPriority(0.8)->setChangeFrequency('weekly'))
        // Loop through all blogs and generate URLs for each one
        ->add(
            Blog::all()->map(function (Blog $blog) {
                return Url::create(route('blogns.show', ['blogn' => $blog->id, 'title' => $blog->title_en]))
                    ->setLastModificationDate($blog->updated_at)
                    ->setChangeFrequency('weekly')
                    ->setPriority(0.7);
            })->toArray() // Flatten the collection for Sitemap
        )
        ->writeToFile(public_path('sitemap.xml')); // Write to sitemap.xml file
    
    return response()->file(public_path('sitemap.xml')); // Serve the sitemap file
})->name('sitemap');

Route::get('/sitemap.xml', function () {
    $sitemap = Sitemap::create();

    // Add URLs to the sitemap
    $sitemap->add(Url::create('/'));
    // $sitemap->add(Url::create('/about'));
    // $sitemap->add(Url::create('/contact'));

    // Generate the sitemap
    return $sitemap->toResponse(request());
});

// Route::get('about', [PageController::class, 'about'])->name('about');
// Route::get('archives', [PageController::class, 'archive'])->name('archive');
// Route::get('contacts', [PageController::class, 'contact'])->name('contact');
// Route::get('faqs', [PageController::class, 'FAQ'])->name('FAQ');
// Route::get('portfolio', [PageController::class, 'portfolio'])->name('portfolio');
// Route::get('pricings', [PageController::class, 'pricing'])->name('pricing');
// Route::get('services', [PageController::class, 'services'])->name('services');
// Route::get('single-post', [PageController::class, 'singlePost'])->name('single.post');
// Route::get('our-teams', [PageController::class, 'ourTeam'])->name('our.team');
Route::post('customers-web', [CustomerController::class, 'storeFromWeb'])->name('store.web.store');


    // invoices
    Route::get('/invoice/show/{invoice}',         [PaymentController::class, 'show'])->name('invoice.show');
    Route::any('/return_url',                     [PaymentController::class, 'return_url'])->name('return_url');
    Route::any('/callback_url',                     [PaymentController::class, 'callback_url'])->name('callback_url');
   
  
    
    // Route::get("apple", [AppleController::class, "index"]);
    // Route::get("apple/pass", [AppleController::class, "generatePass"])->name("apple.pass");
require_once __DIR__ . '/dashboard.php';
