<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MainFeature;
use App\Models\Block1;
use App\Models\Block2;
use App\Models\Block3;
use App\Models\ImageBlock1;
use App\Models\ImageBlock2;
use App\Models\ImageBlock3;
use App\Models\MainReasons;

use App\Models\Service;
use App\Models\Page;

use App\Models\Troubles;
use App\Models\Features;
use App\Models\Step;

use App\Models\Business;
use App\Models\Reason;

use App\Models\contactRequest;

class MainController extends Controller
{
    public function index() {
        $features = MainFeature::all();
        $block1 = Block1::first();
        $block2 = Block2::first();
        $block3 = Block3::first();
        $imageBlock1 = ImageBlock1::all();
        $imageBlock2 = ImageBlock2::all();
        $imageBlock3 = ImageBlock3::all();
	    $reasons = MainReasons::all();
        return view('index', compact('reasons','features', 'block1', 'block2', 'block3', 'imageBlock1', 'imageBlock2', 'imageBlock3'));
    }

    public function services() {
    //completed
        $services = Service::all();
        return view('services', compact('services'));
    }

    public function houses() {
    //completed
        $firstBlock = Troubles::first();
        $features = Features::all();
        $steps = Step::all();
        return view('houses', compact('firstBlock', 'features', 'steps'));
    }

    public function business() {
        $business = Business::all();
        $reasons = Reason::all();
	$block3 = Block3::first();
        return view('business', compact('business', 'reasons', 'block3'));
    }

    public function contacts() {
        return view('contacts');
    }

    public function request(Request $request) {
        $request->validate([
            'name' => 'required',
            'number' => 'required',
            'email' => 'required',
            'comment' =>'required'
        ]);
        contactRequest::create($request->except('_token'));
        return redirect()->back();
    }
    public function thomas_shelby($id){
        $page = Page::find($id);
        $page_contents = $page->pageContents;
        return view('thomas_shelby', compact('page_contents', 'page'));
    }
}
