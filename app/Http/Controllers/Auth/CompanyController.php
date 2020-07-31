<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;
class CompanyController extends Controller
{
    //
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function index(){
        return view('auth.company-register');
    }
    protected function create(Request $request)
    {
        if ($request->input('agree') != null) {
            $validator = Validator::make($request->all(), [
                'companyname' => ['required', 'string', 'max:255', 'unique:users'],

                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:6', 'confirmed', 'same:password_confirmation'],
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)
                    ->withInput();
            }else{
                $register = User::create([
                    'role'=>'employer',
                    'companyname' => $request->input('companyname'),
                    'email' => $request->input('email'),
                    'picture'=>'avatar.png',
                    'password' => Hash::make($request->input('password')),
                ]);
                if ($register) {
                    return redirect()->back()->with(['success' => 'Successfully Registered']);
                } else {
                    return redirect()->back()->with(['error' => 'Sorry Account could not be created, Try Again Later ']);
                }

            }
        }else{
            return redirect()->back()->with(['error' => 'Please Accept our Terms and conditions to continue']);
        }
    }
}
