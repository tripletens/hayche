<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Reviews;
use App\Review_e;
use Illuminate\Support\Facades\Validator;
class ReviewsController extends Controller
{
    //
    public function hayche_review_create_process(Request $request){
        $data = $request->all();
        // `nickname`, `incident_type`, `incident_others`, `physical_violence`,
        // `food_poisoning_restaurant`, `food_poisoning_agency`, `action_taken`,
        // $validator = Validator::make($data, [

        //     'employer_name' => 'required', 'string', 'max:255',
        //     'email' => 'required', 'string', 'email', 'max:255',
        //     'cv' => 'file', 'mimes:pdf|doc|docx', 'max:2048'
        // ]);

        $save_data = Reviews::create(
            array_merge($data,
                [
                    'firstname' => auth()->user()->firstname,
                    'lastname' => auth()->user()->surname,
                    'email' => auth()->user()->email,
                    'personal_phone' => auth()->user()->personal_phone,
                    'city' => auth()->user()->city,
                    'email' => auth()->user()->email,
                ]
        ));
        if ($save_data) {
            return redirect()->back()->with(['success' => 'Review Submitted Sucessfully']);
        } else {
            return redirect()->back()->with(['error' => 'Review could not be processed, Try again Later']);
        }
    }
    public function hayche_review_establishment_process(Request $request){
        $data = $request->all();
        // `name`, `city`, `type`, `pdf`, `image1`, `image1_caption`,
        // `image2`, `image2_caption`, `image3`, `image3_caption`,

        $validator = Validator::make($data, [
            'name' => 'required', 'string', 'max:255',
            'city' => 'required', 'string', 'max:255',
            'type' => 'required', 'string','max:255',
            'pdf' => 'file', 'mimes:pdf|doc|docx', 'max:2048',
            'image1' => 'file', 'mimes:jpg|jpeg|png', 'max:2048',
            'image1_caption' => 'required', 'string', 'max:255',
            'image2' => 'file', 'mimes:jpg|jpeg|png', 'max:2048',
            'image2_caption' => 'required', 'string', 'max:255',
            'image3' => 'file', 'mimes:jpg|jpeg|png', 'max:2048',
            'image3_caption' => 'required', 'string', 'max:255',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)
                ->withInput();

            // return $data;
        } else {
            //    return var_dump($request->file('cv')->getClientOriginalExtension(););
            //image 2
            if ($request->hasFile('pdf')) {
                //get filename with extension
                $pdf_file_name_with_ext = request()->pdf->getClientOriginalName();
                $pdf_file_name_without_ext = pathinfo($pdf_file_name_with_ext, PATHINFO_FILENAME);
                $pdf_extension = $request->file('pdf')->getClientOriginalExtension();
                $pdf_filename_to_store = $pdf_file_name_without_ext . '_' . time() . '_.' . $pdf_extension;
                $path = $request->file('pdf')->storeAs('public/reviews', $pdf_filename_to_store);
            };
            //image 1
            if ($request->hasFile('image1')) {
                //get filename with extension
                $image1_file_name_with_ext = request()->image1->getClientOriginalName();
                $image1_file_name_without_ext = pathinfo($image1_file_name_with_ext, PATHINFO_FILENAME);
                $image1_extension = $request->file('image1')->getClientOriginalExtension();
                $image1_filename_to_store = $image1_file_name_without_ext . '_' . time() . '_.' . $image1_extension;
                $image1_path = $request->file('pdf')->storeAs('public/reviews', $image1_filename_to_store);
            };
            //image 2
            if ($request->hasFile('image2')) {
                //get filename with extension
                $image2_file_name_with_ext = request()->image2->getClientOriginalName();
                $image2_file_name_without_ext = pathinfo($image2_file_name_with_ext, PATHINFO_FILENAME);
                $image2_extension = $request->file('image2')->getClientOriginalExtension();
                $image2_filename_to_store = $image2_file_name_without_ext . '_' . time() . '_.' . $image2_extension;
                $image2_path = $request->file('image2')->storeAs('public/reviews', $image2_filename_to_store);
            }
            if ($request->hasFile('image3')) {
                //get filename with extension
                $image3_file_name_with_ext = request()->image3->getClientOriginalName();
                $image3_file_name_without_ext = pathinfo($image3_file_name_with_ext, PATHINFO_FILENAME);
                $image3_extension = $request->file('image3')->getClientOriginalExtension();
                $image3_filename_to_store = $image3_file_name_without_ext . '_' . time() . '_.' . $image3_extension;
                $image3_path = $request->file('image3')->storeAs('public/reviews', $image3_filename_to_store);
            };

            $save_data = Review_e::create(
                array_merge($data, [
                    'pdf' => $pdf_filename_to_store,
                    'image1'=> $image1_filename_to_store,
                    'image2' => $image2_filename_to_store,
                    'image3' => $image3_filename_to_store
                ])
            );
            if ($save_data) {
                return redirect()->back()->with(['success' => 'Establishment Review sent Sucessfully']);
            } else {
                return redirect()->back()->with(['error' => 'Establishment Review could not be processed, Try again Later.']);
            }
        }
    }
}
