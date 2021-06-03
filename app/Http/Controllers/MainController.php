<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Support\Facades\App;

use App\Models\MainFeature;
use App\Models\Block1;
use App\Models\Block2;
use App\Models\Block3;
use App\Models\ImageBlock1;
use App\Models\ImageBlock2;
use App\Models\ImageBlock3;
use App\Models\MainReasons;

use App\Models\Service;

use App\Models\Troubles;
use App\Models\Features;
use App\Models\Step;

use App\Models\Business;
use App\Models\Reason;

use App\Models\contactRequest;


class MainController extends Controller
{
    public function index() {
        $locale = session('locale');
        App::setLocale($locale);

        $features = MainFeature::all()->translate($locale, 'ru');
        $block1 = Block1::first()->translate($locale, 'ru');
        $block2 = Block2::first()->translate($locale, 'ru');
        $block3 = Block3::first()->translate($locale, 'ru');
        $imageBlock1 = ImageBlock1::all()->translate($locale, 'ru');
        $imageBlock2 = ImageBlock2::all()->translate($locale, 'ru');
        $imageBlock3 = ImageBlock3::all()->translate($locale, 'ru');
	$reasons = MainReasons::all()->translate($locale, 'ru');
        return view('index', compact('reasons','features', 'block1', 'block2', 'block3', 'imageBlock1', 'imageBlock2', 'imageBlock3'));
    }

    public function services() {
        $locale = session('locale');
        App::setLocale($locale);

    //completed
        $services = Service::all()->translate($locale, 'ru');
        return view('services', compact('services'));
    }

    public function houses() {
        $locale = session('locale');
        App::setLocale($locale);

    //completed
        $firstBlock = Troubles::first()->translate($locale, 'ru');
        $features = Features::all()->translate($locale, 'ru');
        $steps = Step::all()->translate($locale, 'ru');
        return view('houses', compact('firstBlock', 'features', 'steps'));
    }

    public function business() {
        $locale = session('locale');
        App::setLocale($locale);

        $business = Business::all()->translate($locale, 'ru');
        $reasons = Reason::all()->translate($locale, 'ru');
	    $block3 = Block3::first()->translate($locale, 'ru');
        return view('business', compact('business', 'reasons', 'block3'));
    }

    public function contacts() {
        $locale = session('locale');
        App::setLocale($locale);
        
        return view('contacts');
    }

    public function request(Request $request) {
        $locale = session('locale');
        App::setLocale($locale);

        $request->validate([
            'name' => 'required',
            'number' => 'required',
            'email' => 'required',
            'comment' =>'required'
        ]);
        contactRequest::create($request->except('_token'));
        return redirect()->back();
    }

    public function setlocale($locale) {
        session(['locale' => $locale]);
        return redirect()->back();
    }

}
