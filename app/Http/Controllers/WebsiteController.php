<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\WebsiteSetting;
use App\Models\Slider;
use App\Models\ContactInfo;

class WebsiteController extends Controller
{
   public function home(Request $request)
   {
   	$settings = WebsiteSetting::get();
   	$sliders = Slider::get();
   	$contact = ContactInfo::get();
   	$data = ['setting'=>$settings, 'contact'=>$contact, 'slider'=>$sliders, "title"=>"Edguru India"];
   	return view("home_page")->with($data);
   }
    public function teacher_register(Request $request)
   {
   	return view("teacher_register");
   }
   public function student_register(Request $request)
   {
   	return view("student_register");
   }
   public function terms(Request $request)
   {
   	return view("terms");
   }
   public function privacy_policy(Request $request)
   {
   	return view("privacy_policy");
   }
}
