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
use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function index(Request $request)
    {
        $sections = SpecialSection::where('place_id',1)->where('status',0)->orderBy('order', 'ASC')->get();
        $sliders = Slider::all();
        $chooses= Choose::orderBy('created_at', 'ASC')->take(3)->get();
        $services = Service::orderBy('created_at', 'ASC')->get();
        $steps =StepByStep::with('stepItemItems')->get();       
        $items=Item::orderBy('order', 'ASC')->get();    
        $our_missions =OurMission::orderBy('order', 'ASC')->take(3)->get();
        $categories=Category::all();
        $products=Product::orderBy('category_id')->take(6)->get();  
        return view('web.index',compact('sections','sliders','chooses' 
        ,'services','steps','our_missions' ,'categories' ,'products' ,'items'));
    }
    public function product(Request $request)
    {     
        $categories=Category::all();
        $products=Product::orderBy('category_id')->get();  
        return view('web.product',compact('categories' ,'products'));
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
