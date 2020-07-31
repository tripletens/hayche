<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class LandingController extends Controller
{
    //
    public function about_us()
    {
        return view('about');
    }
    public function services()
    {
        return view('services');
    }
    public function contact_us()
    {
        return view('contact-us');
    }
    public function hayche_review()
    {
        return view('hayche-review');
    }
    public function hayche_review_create()
    {
        return view('hayche-review-create');
    }
    public function hayche_review_create_process(Request $request){
        echo true;
    }
    public function hayche_review_establishment(){
        $companies = User::where('role','employer')->get();
        $data = [
            'companies'=>$companies
        ];
        return view('hayche-review-establishment')->with($data);
    }
    public function hotel_operations()
    {
        return view('hotel-operations');
    }

    public function human_resources()
    {
        return view('human-resources');
    }
    public function sales()
    {
        return view('sales');
    }
    public function quality_control()
    {
        return view('quality-control');
    }

    public function index(){
        return view('welcome');
    }
}
