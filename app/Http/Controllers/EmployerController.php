<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Vacancies;
use App\Applications;
use App\Payments;
use App\Messages;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class EmployerController extends Controller
{
    public function account_info(){
        return view('pages.employers.account_info');
    }
    public function request_staff(){
        return view('pages.employers.request-staff');
    }
    public function request_staff_process(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'staff_no' => 'required', 'string', 'max:255',
            'department' => 'required', 'string', 'max:255',
            'post_title' => 'required', 'string', 'max:255',
            'post_description' => 'required', 'string', 'max:255',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)
                ->withInput();

            // return $data;
        } else {

            $save_data = Vacancies::create(
                array_merge(
                    $data,
                    [
                        'employer_id' => auth()->user()->id,
                        'employer_name' => auth()->user()->companyname,
                        'employer_about' => auth()->user()->about,
                        'empoyer_logo'=> auth()->user()->picture,
                        'employer_address'=> auth()->user()->address,
                        'employer_state'=> auth()->user()->state,
                        'employer_country'=> auth()->user()->country
                    ]
                )
            );
            if ($save_data) {
                return redirect()->back()->with(['success' => 'Vacancy Uploaded Sucessfully']);
            } else {
                return redirect()->back()->with(['error' => 'Vacancy could not be Uploaded, Try Again Later']);
            }
        }
    }
    public function payment_info(){
        $payments = Payments::all();
        $data = [
            'payments' => $payments];
        return view('pages.employers.payment_info')->with($data);
    }

    public function contact_us(){
        
        $user_id = auth()->user()->id;
        $applicants = Applications::where('employer_id',$user_id)->get();
        $messages = Messages::where('sender_id', $user_id)
            ->orWhere('receiver_id', $user_id)->get();
        $data = [
            'applicants'=>$applicants,
            'messages'=>$messages,
        ];
        return view('pages.employers.contact_us')->with($data);
    }
    public function process_new_message(Request $request,$id){
        // return $id;
        $data = $request->all();
        $validator = Validator::make($data, [
            'title' => 'required', 'string', 'max:255',
            'message' => 'required', 'string', 'max:255',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)
                ->withInput();

            // return $data;
        } else {
            $sender_id = auth()->user()->id;

            $save_data = Messages::create(
                array_merge(
                    $data,
                    [
                        'sender_id' => $sender_id,
                        'receiver_id' => $id
                    ]
                )
            );
            if ($save_data) {
                return redirect()->back()->with(['success' => 'Message sent Sucessfullly']);
            } else {
                return redirect()->back()->with(['error' => 'Message could not be sent, Try Again Later']);
            }
        }
    }
    public function edit_info(){
        return view('pages.employers.edit_info');
    }
    public function update_profile(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            // 'email' => 'required', 'string', 'max:255',
            'companyname' => 'required', 'string', 'max:255',
            'facility_type' => 'required', 'string', 'max:255',
            'about' => 'required', 'string', 'max:255',
            'address' => 'required', 'string', 'max:255',
            'personal_phone' => 'required', 'string', 'max:255',

            'state' => 'required', 'string', 'max:255',
            'country' => 'required', 'string', 'max:255',
            'contact_surname' => 'required', 'string', 'max:255',
            'contact_firstname' => 'required', 'string', 'max:255',
            'contact_position' => 'required', 'string', 'max:255',
            'contact_phone_one' => 'required', 'string', 'max:255',

            'contact_email' => 'required', 'string', 'max:255',
            'password' => 'required', 'string', 'min:6', 'same:password_confirmation',
            'password_confirmation' => 'required', 'string', 'min:6', 'same:password'
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)
                ->withInput();

            // return $data;
        } else {

            $id = auth()->user()->id;
            $user = User::find($id);
            if ($request->input('password') == $request->input('password_confirmation')) {
                $save_data = $user->update(
                    array_merge(
                        $data,
                        [
                            'password' => Hash::make($request->input('password'))
                        ]
                    )
                );
                if ($save_data) {
                    return redirect()->back()->with(['success' => 'Profile Updated Sucessfullly']);
                } else {
                    return redirect()->back()->with(['error' => 'Profile could not be Updated, Try Again Later']);
                }
            } else {
                return redirect()->back()->with(['error' => 'Passwords does not match']);
            }
        }
    }
}
