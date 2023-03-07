<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Choose;
use App\Models\Contact;
use App\Models\Item;
use App\Models\OurMission;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slider;
use App\Models\SpecialSection;
use App\Models\StepByStep;
use App\Models\Work;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function index(Request $request)
    {
        $sections = SpecialSection::where('place_id',1)->where('status',0)->orderBy('order', 'ASC')->get();
        $sliders = Slider::where('place_id',1)->get();
        $chooses= Choose::orderBy('created_at', 'ASC')->take(3)->get();
        $services = Service::orderBy('created_at', 'ASC')->take(6)->get();
        $steps =StepByStep::with('stepItemItems')->get();
        $items=Item::orderBy('order', 'ASC')->get();
        $our_missions =OurMission::orderBy('order', 'ASC')->take(3)->get();
        $categories=Service::all();
        $products=Product::with('service')->orderBy('category_id')->take(6)->get();
        $latestproducts = Work::orderBy('created_at', 'ASC')->take(6)->get();
        // $latestproducts = Work::orderBy('created_at', 'ASC')->chunk(3 ,function($latestproducts));

        return view('web.index',compact('sections','sliders','chooses'
        ,'services','steps','our_missions' ,'categories' ,'products' ,'items','latestproducts'));
    }
    public function product(Request $request)
    {
        $sliders = Slider::all();
        $categories=Category::all();
        $products=Product::orderBy('category_id')->get();
        return view('web.product',compact('categories' ,'products','sliders'));
    }

    public function service($lang,$id)
    {
        $sections = SpecialSection::where('place_id',2)->where('status',0)->orderBy('order', 'ASC')->get();
        $sliders = Slider::where('place_id',2)->get();
        $service=Service::with('works')->findOrFail($id);
//        $products=Product::where('category_id',$id)->get();
        return view('web.service',compact('service','sliders','sections'));
    }


    public function contact(Request $request)
    {
        $contact = Contact::create($request->all());
        if ($contact)
            $msg = 'OK';
        else
            $msg = 'false';

        return response()->json(['msg'=>$msg]);
    }
}
