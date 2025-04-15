<?php

namespace App\Http\Controllers\Web;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\Plan;
use App\Models\Footer;
use App\Models\Header;
use App\Models\OurTeam;
use App\Models\Package;
use App\Models\Partner;
use App\Models\Section;
use App\Models\Service;
use App\Services\HomeCache;
use App\Models\BusinessExhibition;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home()
    {
        
        $header              =  HomeCache::cache('Header', Header::first());
        $footer              =  HomeCache::cache('Footer', Footer::first());
        $services            =  HomeCache::cache('Service', Service::get());
        $section             =  HomeCache::cache('Section', Section::first());
        $partners            =  HomeCache::cache('Partner',Partner::get());
        $plans               =  HomeCache::cache('Plan', Plan::get());
        $businessExhibitions =  HomeCache::cache('BusinessExhibition', BusinessExhibition::get());
        $package             =  HomeCache::cache('Package', Package::orderBy('order')->get());

        return view('web.page.home', compact('header', 'footer', 'services', 'section', 'partners', 'businessExhibitions', 'plans','package'));
    }
    
        public function home_test()
    {
        
        $header              =  HomeCache::cache('Header', Header::first());
        $footer              =  HomeCache::cache('Footer', Footer::first());
        $services            =  HomeCache::cache('Service', Service::get());
        $section             =  HomeCache::cache('Section', Section::first());
        $partners            =  HomeCache::cache('Partner',Partner::get());
        $plans               =  HomeCache::cache('Plan', Plan::get());
        $businessExhibitions =  HomeCache::cache('BusinessExhibition', BusinessExhibition::get());
        $package             =  HomeCache::cache('Package', Package::orderBy('order')->get());

        return view('web.page.home_test', compact('header', 'footer', 'services', 'section', 'partners', 'businessExhibitions', 'plans','package'));
    }


    public function blogns()
    {
        $header              =  HomeCache::cache('Header', Header::first());
        $footer              =  HomeCache::cache('Footer', Footer::first());
        $section             =  HomeCache::cache('Section', Section::first());
        $blogs =                HomeCache::cache('Blog', Blog::orderBy('created_at', 'desc')->paginate(12));


        return view('web.page.blogs.blog', compact('header', 'footer', 'section','blogs'));
    }


    public function show($blog, $title = null)
    {
        $header              = Header::first();
        $footer              = Footer::first();
        $services            = Service::get();
        $section             = Section::first();
        $partners            = Partner::get();
        $plans               = Plan::get();
        $businessExhibitions = BusinessExhibition::paginate(3);
        $blog = Blog::where('id', $blog)->firstOrFail();
        return view('web.page.blogs.show', compact('header', 'footer', 'services', 'section', 'partners', 'businessExhibitions', 'plans','blog'));
    }

    public function about()
    {
        $ourTeams = OurTeam::get();
        return view('web.page.about', compact('ourTeams'));
    }

    public function archive()
    {
        return view('web.page.archive');
    }

    public function contact()
    {
        return view('web.page.contact');
    }

    public function FAQ()
    {
        $faqs = Faq::get();
        return view('web.page.FAQ', compact('faqs'));
    }

    public function portfolio()
    {
        return view('web.page.portfolio');
    }

    public function pricing()
    {
        return view('web.page.pricing');
    }

    public function services()
    {
        $services = Service::get();
        return view('web.page.services', compact('services'));
    }

    public function singlePost()
    {
        return view('web.page.singlePost');
    }

    public function ourTeam()
    {
        $ourTeams = OurTeam::get();
        return view('web.page.ourTeam', compact('ourTeams'));
    }
}
