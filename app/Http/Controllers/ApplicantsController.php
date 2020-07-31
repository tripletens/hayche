<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Vacancies;
use App\Applications;
use App\Messages;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class ApplicantsController extends Controller
{
    //
    public function application_status(){
        $id = auth()->user()->id;
        $user = User::find($id);
        $applications = $user->applications;

        $data = [
            'applications' => $applications
        ];
        return view('pages.applicants.application_status')->with($data);
    }
    public function apply_position(){
        $vacancies = Vacancies::where('status',true)->get();
        $data = [
            'vacancies'=>$vacancies
        ];
        return view('pages.applicants.apply_position')->with($data);
    }
    public function process_application(Request $request){
        $data = $request->all();
        // `user_id`, `email`, `mobile_phone`, `whatsapp_phone`,
        //  `dob`, `nationality`, `passport`, `cv`,
        //  `qualification`, `experience`, `skills`,
        //  `refer`, `refer_others`, `post_id`,
        //  `post_title`, `employer_id`, `employer_message`,
        //   `employer_name`, `status`
        //  `created_at`, `updated_at`, `refer1`, `refer2`,
        //   `refer3`, `refer4`, `refer5`, `refer6`
        $validator = Validator::make($data, [
            'country' => 'required', 'string', 'max:255',
            'employer_name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255',
            'cv' => 'file','mimes:pdf|doc|docx', 'max:2048'
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)
                ->withInput();

            // return $data;
        } else {
        //    return var_dump($request->file('cv')->getClientOriginalExtension(););
            if ($request->hasFile('cv')) {
                //get filename with extension
                $file_name_with_ext = request()->cv->getClientOriginalName();
                $file_name_without_ext = pathinfo($file_name_with_ext, PATHINFO_FILENAME);
                $extension = $request->file('cv')->getClientOriginalExtension();
                $filename_to_store = $file_name_without_ext . '_' . time() . '_.' . $extension;
                $path = $request->file('cv')->storeAs('public/cv', $filename_to_store);
            }else{
                $filename_to_store = auth()->user()->cv;
            };
            $save_data = Applications::create(
                array_merge($data,['cv'=>$filename_to_store,
                    'surname'=>auth()->user()->surname,
                    'firstname' => auth()->user()->firstname])
            );
            if($save_data){
                return redirect()->back()->with(['success' => 'Application Sucessful']);
            }else{
                return redirect()->back()->with(['error' => 'Application could not be processed, Contact Admin']);
            }
        }
    }
    public function upload_cv(Request $request)
    {
        return view('pages.applicants.upload_cv');
    }
    public function process_upload_cv(Request $request){
        $data = $request->all();
        $validator = Validator::make($data, [
            'cv' => 'required', 'file', 'mimes:pdf|doc|docx','max:2048'
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)
                ->withInput();

            // return $data;
        } else {
            //    return var_dump($request->file('cv')->getClientOriginalExtension(););
            if ($request->hasFile('cv')) {
                //get filename with extension
                $file_name_with_ext = request()->cv->getClientOriginalName();
                $file_name_without_ext = pathinfo($file_name_with_ext, PATHINFO_FILENAME);
                $extension = $request->file('cv')->getClientOriginalExtension();
                $filename_to_store = $file_name_without_ext . '_' . time() . '_.' . $extension;
                $path = $request->file('cv')->storeAs('public/cv', $filename_to_store);
            }
            $id = auth()->user()->id;
            $user = User::find($id);
            $user->cv = $filename_to_store;
            $save_data = $user->save();
            if ($save_data) {
                return redirect()->back()->with(['success' => 'Cv Upload Sucessful']);
            } else {
                return redirect()->back()->with(['error' => 'Cv could not be uploaded, Try Again Later']);
            }
        }
    }
    public function contact_us(){
        $user_id = auth()->user()->id;
        $messages = Messages::where('sender_id', $user_id)
                ->orWhere('receiver_id',$user_id)->get();
        return view('pages.applicants.contact_us')->with(
            ['messages'=>$messages]
        );
    }
    public function process_new_message(Request $request){
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
            if(auth()->user()->role !== 'admin'){
                $receiver_id = 0;
            };
            $save_data = Messages::create(
                array_merge($data,
                [
                    'sender_id'=> $sender_id,
                    'receiver_id'=>$receiver_id
                ])
            );
            if ($save_data) {
                return redirect()->back()->with(['success' => 'Message sent Sucessfullly']);
            } else {
                return redirect()->back()->with(['error' => 'Message could not be sent, Try Again Later']);
            }
        }
    }
    public function process_reply_message(Request $request,$id)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'reply' => 'required', 'string', 'max:255',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)
                ->withInput();

            // return $data;
        } else {
            $sender_id = auth()->user()->id;
            if (auth()->user()->role !== 'admin') {
                $receiver_id = 0;
            };
            $message = Messages::find($id);

            $message->reply = $request->input('reply');
            $save_data = $message->save();
            if ($save_data) {
                return redirect()->back()->with(['success' => 'Reply sent Sucessfullly']);
            } else {
                return redirect()->back()->with(['error' => 'Reply could not be sent, Try Again Later']);
            }
        }
    }
    public function edit_information(){
        return view('pages.applicants.edit_information');
    }
    public function edit_passport(Request $request){
        $data = $request->all();
        $validator = Validator::make($data, [
            'picture' => 'required', 'file', 'mimes:jpg|jpeg|png', 'max:2048'
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)
                ->withInput();

            // return $data;
        } else {
            //    return var_dump($request->file('cv')->getClientOriginalExtension(););
            if ($request->hasFile('picture')) {
                //get filename with extension
                $file_name_with_ext = request()->picture->getClientOriginalName();
                $file_name_without_ext = pathinfo($file_name_with_ext, PATHINFO_FILENAME);
                $extension = $request->file('picture')->getClientOriginalExtension();
                $filename_to_store = $file_name_without_ext . '_' . time() . '_.' . $extension;
                $path = $request->file('picture')->storeAs('public/pictures', $filename_to_store);
            }
            $id = auth()->user()->id;
            $user = User::find($id);
            $user->picture = $filename_to_store;
            $save_data = $user->save();
            if ($save_data) {
                return redirect()->back()->with(['success' => 'Picture Saved Sucessfully']);
            } else {
                return redirect()->back()->with(['error' => 'Picture could not be uploaded, Try Again Later']);
            }
        }
    }
    public function update_profile(Request $request){
        $data = $request->all();
        $validator = Validator::make($data, [
            'email'=> 'required', 'string', 'max:255',
            'surname' => 'required', 'string', 'max:255',
            'firstname' => 'required', 'string', 'max:255',
            'address' => 'required', 'string', 'max:255',
            'about' => 'required', 'string', 'max:255',
            'education' => 'required', 'string', 'max:255',
            'skills'=> 'required', 'string', 'max:255',
            'gender' => 'required', 'string', 'max:255',
            'dob' => 'required', 'date', 'max:255',
            'personal_phone' => 'required', 'number', 'max:255',
            'whatsapp_phone' => 'required', 'number', 'max:255',
            'skype' => 'required', 'string', 'max:255',
            'expertise' => 'required', 'string', 'max:255',
            'state' => 'required', 'string', 'max:255',
            'country' => 'required', 'string', 'max:255',
            'password' => 'required', 'string', 'min:6', 'same:password_confirmation',
            'password_confirmation' => 'required', 'string', 'min:6', 'same:password',
            'more_info' => 'required', 'string', 'max:255',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)
                ->withInput();

            // return $data;
        } else {

            $id = auth()->user()->id;
            $user = User::find($id);
            if($request->input('password') == $request->input('password_confirmation')){
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
            }else{
                return redirect()->back()->with(['error' => 'Passwords does not match']);
            }

        }
    }
}
