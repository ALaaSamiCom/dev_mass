<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\Choose;
use App\Models\Contact;
use App\Models\Item;
use App\Models\OurMission;
use App\Models\Page;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use App\Models\ServiceFeature;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\SpecialSection;
use App\Models\StepByStep;
use App\Models\Testimonial;
use App\Models\Work;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public $theme;

    public function __construct(Request $request)
    {
        $settings = Setting::first();
        return $this->theme = $settings->theme;
    }

    public function index(Request $request)
    {
        $about_us_section = SpecialSection::where('section_place', 'about_us')->first();
        $sections = SpecialSection::where('place_id', 1)->orderBy('order', 'ASC')->get();
        $sliders = Slider::all();
        $projects = Project::all();
        $testimonials = Testimonial::all();
        $articles = Article::all();
        $chooses = Choose::orderBy('created_at', 'ASC')->take(3)->get();
        $services = Service::orderBy('created_at', 'ASC')->get();
        $steps = StepByStep::with('stepItemItems')->get();
        $items = Item::orderBy('order', 'ASC')->get();
        $our_missions = OurMission::orderBy('order', 'ASC')->take(3)->get();
        $categories = Service::all();

        return view('NewWeb.index', compact('sections', 'about_us_section', 'sliders', 'chooses', 'projects', 'testimonials'
            , 'articles', 'services', 'steps', 'our_missions', 'categories', 'items'));
    }

    public function services($id, Request $request)
    {
        $about_us_section = SpecialSection::where('section_place', 'about_us')->first();
        $sections = SpecialSection::where('place_id', 6)->orderBy('order', 'ASC')->get();
        $services = Service::all();
        $service = Service::with('features')->where('id', $id)->first();
        $projects = Project::with('services')->where('service_id', $id)->get();
        $testimonials = Testimonial::all();

        return view('NewWeb.services', compact('sections', 'about_us_section', 'testimonials', 'services', 'service', 'projects'));
    }

    public function portfolio(Request $request)
    {
        $about_us_section = SpecialSection::where('section_place', 'about_us')->first();
        $sections = SpecialSection::where('place_id', 5)->orderBy('order', 'ASC')->get();
        $projects = Project::all();
        $testimonials = Testimonial::all();
        $articles = Article::all();
        $services = Service::with('projects')->get();

        return view('NewWeb.portfolio', compact('sections', 'about_us_section', 'projects', 'services', 'testimonials'
            , 'articles'));
    }

    public function our_company(Request $request)
    {
        $about_us_section = SpecialSection::where('section_place', 'about_us')->first();
        $sections = SpecialSection::where('place_id', 2)->orderBy('order', 'ASC')->get();
        $projects = Project::all();
        $testimonials = Testimonial::all();
        $articles = Article::all();
        $services = Service::all();

        return view('NewWeb.ourCompany', compact('sections', 'about_us_section', 'projects', 'testimonials', 'services'
            , 'articles'));
    }

    public function blog(Request $request)
    {
        $about_us_section = SpecialSection::where('section_place', 'about_us')->first();
        $sections = SpecialSection::where('place_id', 3)->orderBy('order', 'ASC')->get();
        $projects = Project::all();
        $testimonials = Testimonial::all();
        $articles_query = Article::query();
        $articles = $articles_query->orderBy('created_at', 'DESC')->get();
        $last_five_articles = $articles_query->orderBy('created_at', 'DESC')->skip(1)->take(5)->get();
        $last_article = $articles_query->orderBy('created_at', 'DESC')->first();
        $services = Service::all();

        return view('NewWeb.blog', compact('sections', 'about_us_section', 'projects', 'testimonials', 'services'
            , 'articles', 'last_five_articles', 'last_article'));
    }

    public function blog_details($id)
    {
        $about_us_section = SpecialSection::where('section_place', 'about_us')->first();
        $sections = SpecialSection::where('place_id', 7)->orderBy('order', 'ASC')->get();
        $projects = Project::all();
        $testimonials = Testimonial::all();
        $articles_query = Article::query();
        $articles = $articles_query->with('media')->get();
        $article = $articles_query->with('media')->where('id', $id)->first();
//dd(Article::with('media')->get());
        $services = Service::all();

        return view('NewWeb.blog_details', compact('sections', 'about_us_section', 'projects', 'testimonials', 'services'
            , 'articles','article'));
    }

    public function quote(Request $request)
    {
        $about_us_section = SpecialSection::where('section_place', 'about_us')->first();
        $sections = SpecialSection::where('place_id', 4)->orderBy('order', 'ASC')->get();
        $projects = Project::all();
        $testimonials = Testimonial::all();
        $articles = Article::all();
        $services = Service::all();

        return view('NewWeb.quote', compact('sections', 'projects', 'about_us_section', 'testimonials', 'services'
            , 'articles'));
    }


    public function send_consultation(Request $request)
    {
        dd($request);
        $contact = Contact::create($request->all());
        if ($contact)
            $msg = 'success';
        else
            $msg = 'failed';

        return redirect()->back()->with('status', true);
    }
}
