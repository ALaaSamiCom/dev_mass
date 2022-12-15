<?php

namespace App\Http\Controllers;

use App\Models\Choose;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Slider;
use App\Models\SpecialSection;
use App\Models\StepByStep;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function index()
    {
        $sections = SpecialSection::where('place_id',0)->where('status',0)->orderBy('order', 'ASC')->get();
        $sliders = Slider::all();
        $chooses= Choose::orderBy('created_at', 'ASC')->take(3)->get();
        $services = Service::orderBy('created_at', 'ASC')->take(6)->get();
        $Steps =StepByStep::with('stepItemItems')->get();

        return view('web.index',compact('sections','sliders','chooses' ,'services','Steps'));
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
