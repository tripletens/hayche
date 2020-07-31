<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Applications;
use App\Payments;
use App\Messages;
use App\Review_e;
use App\Vacancies;
use App\Reviews;
class AdminController extends Controller
{
    //
    public function account_info()
    {
        return view('pages.admin.account_info');
    }
    public function registered_companies(){
        $companies = User::where('role','employer')->get();
        $data = ['companies'=>$companies];
        return view('pages.admin.registered_companies')->with($data);
    }
    public function registered_applicants(){
        $applicants = Applications::all();
        $data = ['applicants'=>$applicants];
        return view('pages.admin.registered_applicants')->with($data);
    }
    public function all_users()
    {
        $users = User::all();
        $data = ['users' => $users];
        return view('pages.admin.all_users')->with($data);
    }
    public function payment_info()
    {
        $payments = Payments::all();
        $data = [
            'payments' => $payments
        ];
        return view('pages.admin.payment_info')->with($data);
    }
    public function contact_us()
    {
        $user_id = auth()->user()->id;
        $users = User::all();

        $messages = Messages::where('sender_id', $user_id)
            ->orWhere('receiver_id', $user_id)->get();
        $data = [
            'users' => $users,
            'messages' => $messages,
        ];
        return view('pages.admin.contact_us')->with($data);
    }
    public function edit_info()
    {
        return view('pages.admin.edit_info');
    }
    public function vacancies(){
        $vacancies = Vacancies::all();
        $data = [
            'vacancies' => $vacancies
        ];
        return view('pages.admin.vacancies')->with($data);
    }
    public function incident_reports(){
        $reports = Reviews::orderBy('id', 'DESC')->get();
        $data = [
            'reports' => $reports,

        ];
        return view('pages.admin.all_incident_reports')->with($data);
    }
    public function establishment_reviews(){
        $reviews = Review_e::orderBy('id', 'DESC')->get();
        $data = [
            'reviews' => $reviews,
        ];
        return view('pages.admin.all_review_e')->with($data);
    }
}
