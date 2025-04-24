<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\PlanController;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\FooterController;
use App\Http\Controllers\Dashboard\HeaderController;
use App\Http\Controllers\Dashboard\ReviewController;
use App\Http\Controllers\Dashboard\GalleryController;
use App\Http\Controllers\Dashboard\InvoiceController;
use App\Http\Controllers\Dashboard\OurTeamController;
use App\Http\Controllers\Dashboard\PackageController;
use App\Http\Controllers\Dashboard\PartnerController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\CustomerController;
use App\Http\Controllers\Dashboard\FeaturesController;
use App\Http\Controllers\Dashboard\LanguageController;
use App\Http\Controllers\Dashboard\QuestionController;
use App\Http\Controllers\Dashboard\SettingsController;
use App\Http\Controllers\Dashboard\AdvantageController;
use App\Http\Controllers\Dashboard\MarketeerController;
use App\Http\Controllers\Dashboard\SubServicesController;
use App\Http\Controllers\Dashboard\ServiceBanerController;
use App\Http\Controllers\Dashboard\ServiceSectshionController;
use App\Http\Controllers\Dashboard\BusinessExhibitionController;


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

Route::middleware('guest:admin')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'loginPost'])->name('login.post');

    Route::get('confrm-mail/{randCode}', [AuthController::class, 'confrmMail'])->name('confrm-mail');
    Route::post('confrm-mail/{randCode}', [AuthController::class, 'confrmMailPost'])->name('confrm-mail-post');
});

Route::middleware(['auth:admin', 'optimizeImages'])->name('dashboard.')->group(function () {
    Route::get('/dash', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    // Admins
    Route::get('admins', [AdminController::class, 'index'])->name('admin.index');
    Route::get('admins/create', [AdminController::class, 'create'])->name('admin.create');
    Route::get('admins/{admin}', [AdminController::class, 'show'])->name('admin.show');
    Route::post('admins', [AdminController::class, 'store'])->name('admin.store');
    Route::get('admins/{admin}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('admins/{admin}/update', [AdminController::class, 'update'])->name('admin.update');
    Route::get('admins/{admin}/delete', [AdminController::class, 'destroy'])->name('admin.delete');

    // Services
    Route::get('services', [ServiceController::class, 'index'])->name('service.index');
    Route::get('services/create', [ServiceController::class, 'create'])->name('service.create');
    Route::get('services/{service}', [ServiceController::class, 'show'])->name('service.show');
    Route::post('services', [ServiceController::class, 'store'])->name('service.store');
    Route::get('services/{service}/edit', [ServiceController::class, 'edit'])->name('service.edit');
    Route::put('services/{service}/update', [ServiceController::class, 'update'])->name('service.update');
    Route::get('services/{service}/delete', [ServiceController::class, 'destroy'])->name('service.delete');


    // Services sectshions
    Route::get('service-sectshion/{service}', [ServiceSectshionController::class, 'index'])->name('service.sectshion.index');
    Route::get('service-sectshion/create/{service}', [ServiceSectshionController::class, 'create'])->name('service.sectshion.create');
    Route::post('service-sectshion/{service}', [ServiceSectshionController::class, 'store'])->name('service.sectshion.store');
    Route::get('service-sectshion/edit/{serviceSectshion}', [ServiceSectshionController::class, 'edit'])->name('service.sectshion.edit');
    Route::put('service-sectshion/{serviceSectshion}', [ServiceSectshionController::class, 'update'])->name('service.sectshion.update');
    Route::delete('service-sectshion/{serviceSectshion}', [ServiceSectshionController::class, 'destroy'])->name('service.sectshion.destroy');




    // Our Teams
    Route::get('our-teams', [OurTeamController::class, 'index'])->name('our-team.index');
    Route::get('our-teams/create', [OurTeamController::class, 'create'])->name('our-team.create');
    Route::get('our-teams/{ourTeam}', [OurTeamController::class, 'show'])->name('our-team.show');
    Route::post('our-teams', [OurTeamController::class, 'store'])->name('our-team.store');
    Route::get('our-teams/{ourTeam}/edit', [OurTeamController::class, 'edit'])->name('our-team.edit');
    Route::put('our-teams/{ourTeam}/update', [OurTeamController::class, 'update'])->name('our-team.update');
    Route::get('our-teams/{ourTeam}/delete', [OurTeamController::class, 'destroy'])->name('our-team.delete');

    // Partners
    Route::get('partners', [PartnerController::class, 'index'])->name('partner.index');
    Route::get('partners/create', [PartnerController::class, 'create'])->name('partner.create');
    Route::get('partners/{partner}', [PartnerController::class, 'show'])->name('partner.show');
    Route::post('partners', [PartnerController::class, 'store'])->name('partner.store');
    Route::get('partners/{partner}/edit', [PartnerController::class, 'edit'])->name('partner.edit');
    Route::put('partners/{partner}/update', [PartnerController::class, 'update'])->name('partner.update');
    Route::get('partners/{partner}/delete', [PartnerController::class, 'destroy'])->name('partner.delete');

    // Business Exhibitions
    Route::get('business-exhibitions', [BusinessExhibitionController::class, 'index'])->name('business.exhibition.index');
    Route::get('business-exhibitions/create', [BusinessExhibitionController::class, 'create'])->name('business.exhibition.create');
    Route::get('business-exhibitions/{businessExhibition}', [BusinessExhibitionController::class, 'show'])->name('business.exhibition.show');
    Route::post('business-exhibitions', [BusinessExhibitionController::class, 'store'])->name('business.exhibition.store');
    Route::get('business-exhibitions/{businessExhibition}/edit', [BusinessExhibitionController::class, 'edit'])->name('business.exhibition.edit');
    Route::put('business-exhibitions/{businessExhibition}/update', [BusinessExhibitionController::class, 'update'])->name('business.exhibition.update');
    Route::get('business-exhibitions/{businessExhibition}/delete', [BusinessExhibitionController::class, 'destroy'])->name('business.exhibition.delete');

    // Route::get('faqs', [FaqController::class, 'index'])->name('faq.index');
    // Route::get('faqs/create', [FaqController::class, 'create'])->name('faq.create');
    // Route::get('faqs/{faq}', [FaqController::class, 'show'])->name('faq.show');
    // Route::post('faqs', [FaqController::class, 'store'])->name('faq.store');
    // Route::get('faqs/{faq}/edit', [FaqController::class, 'edit'])->name('faq.edit');
    // Route::put('faqs/{faq}/update', [FaqController::class, 'update'])->name('faq.update');
    // Route::get('faqs/{faq}/delete', [FaqController::class, 'destroy'])->name('faq.delete');

    // Headers
    Route::get('headers', [HeaderController::class, 'index'])->name('header.index');
    Route::get('headers/{header}/edit', [HeaderController::class, 'edit'])->name('header.edit');
    Route::put('headers/{header}/update', [HeaderController::class, 'update'])->name('header.update');

    // Footers
    Route::get('footers', [FooterController::class, 'index'])->name('footer.index');
    Route::get('footers/{footer}/edit', [FooterController::class, 'edit'])->name('footer.edit');
    Route::put('footers/{footer}/update', [FooterController::class, 'update'])->name('footer.update');

    // Sections
    Route::get('sections', [SectionController::class, 'index'])->name('section.index');
    Route::get('sections/{section}/edit', [SectionController::class, 'edit'])->name('section.edit');
    Route::put('sections/{section}/update', [SectionController::class, 'update'])->name('section.update');

    // Marketeers
    Route::get('marketeers', [MarketeerController::class, 'index'])->name('marketeer.index');
    Route::get('marketeers/create', [MarketeerController::class, 'create'])->name('marketeer.create');
    Route::get('marketeers/{marketeer}', [MarketeerController::class, 'show'])->name('marketeer.show');
    Route::post('marketeers', [MarketeerController::class, 'store'])->name('marketeer.store');
    Route::get('marketeers/{marketeer}/edit', [MarketeerController::class, 'edit'])->name('marketeer.edit');
    Route::put('marketeers/{marketeer}/update', [MarketeerController::class, 'update'])->name('marketeer.update');
    Route::get('marketeers/{marketeer}/delete', [MarketeerController::class, 'destroy'])->name('marketeer.delete');

    // customers
    Route::get('customers', [CustomerController::class, 'index'])->name('customer.index');
    Route::get('customers/create', [CustomerController::class, 'create'])->name('customer.create');
    Route::get('customers/{customer}', [CustomerController::class, 'show'])->name('customer.show');
    Route::post('customers', [CustomerController::class, 'store'])->name('customer.store');
    Route::get('customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::put('customers/{customer}/update', [CustomerController::class, 'update'])->name('customer.update');
    Route::get('customers/{customer}/delete', [CustomerController::class, 'destroy'])->name('customer.delete');

    // Plans
    Route::get('plans', [PlanController::class, 'index'])->name('plan.index');
    Route::get('plans/create', [PlanController::class, 'create'])->name('plan.create');
    Route::get('plans/{plan}', [PlanController::class, 'show'])->name('plan.show');
    Route::post('plans', [PlanController::class, 'store'])->name('plan.store');
    Route::get('plans/{plan}/edit', [PlanController::class, 'edit'])->name('plan.edit');
    Route::put('plans/{plan}/update', [PlanController::class, 'update'])->name('plan.update');
    Route::get('plans/{plan}/delete', [PlanController::class, 'destroy'])->name('plan.delete');

    // blogs
    Route::resource('blogs', BlogController::class);
    // packages
    Route::resource('packages', PackageController::class);

    // packages
    Route::resource('gallery', GalleryController::class);

    // meta
    Route::get('settings/meta', [SettingsController::class, 'index'])->name('settings.index');
    Route::put('settings/meta', [SettingsController::class, 'update'])->name('settings.update');

    Route::get('invoices/replicate/{id}', [InvoiceController::class, 'replicateInvoice'])
        ->name('invoices.replicate');


    Route::resource('invoices',         InvoiceController::class)->except('destroy', 'show');
    Route::delete('invoices/{invoice}', [InvoiceController::class, 'destroy'])->name('invoices.destroy');



    Route::get('languages/{slug?}', [LanguageController::class, 'index'])->name('languages.index');
    Route::get('languages/dash/edit/{locale}/{language}/{key}/{slug?}', [LanguageController::class, 'edit'])->name('languages.edit');
    Route::put('languages/dash/update/{locale}/{language}/{key}/{slug?}', [LanguageController::class, 'update'])->name('languages.update');

    Route::resource('sub_services',         SubServicesController::class)->except('index', 'show');
    Route::get('sub_services/{service}', [SubServicesController::class, 'index'])->name('sub_services.index');

    Route::resource('advantages',         AdvantageController::class)->except('index', 'show');
    Route::get('advantages/{service}', [AdvantageController::class, 'index'])->name('advantages.index');

    Route::resource('questions',         QuestionController::class)->except('index', 'show');
    Route::get('questions/{service}', [QuestionController::class, 'index'])->name('questions.index');

    Route::resource('service_banners',         ServiceBanerController::class)->except('index', 'show');
    Route::get('service_banners/{service}', [ServiceBanerController::class, 'index'])->name('service_banners.index');

    Route::resource('features',         FeaturesController::class)->except('index', 'show');
    Route::get('features/{service}', [FeaturesController::class, 'index'])->name('features.index');



    Route::resource('reviews',         ReviewController::class);
});
Route::post('customers-web', [CustomerController::class, 'storeFromWeb'])->name('store.web.store');
