<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'club_name' => ['required', 'string', 'max:255'],
            'locality' => ['required', 'string', 'max:255'],
            'team_name' => ['required', 'string', 'max:255'],
            'current_age_gap' => ['required'],
            'group_gender' => ['required'],
            'home_kit' => ['required','max:255'],
            'away_kit' => ['required','max:255'],
            'training_kit' => ['required','max:255'],
            'address' => ['required','max:255'],
            'town' => ['required','max:255'],
            'post_code' => ['required','max:255'],
            'home_mobile' => ['required','max:255'],
            'present_contact' => ['required','max:255'],
            'your_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'club_name' => $data['club_name'],
            'name' => $data['your_name'],
            'locality' => $data['locality'],
            'team_name' => $data['team_name'],
            'current_age_gap' => $data['current_age_gap'],
            'group_gender' => $data['group_gender'],
            'home_kit' => $data['home_kit'],
            'away_kit' => $data['away_kit'],
            'training_kit' => $data['training_kit'],
            'your_name' => $data['your_name'],
            'town' => $data['town'],
            'post_code' => $data['post_code'],
            'home_mobile' => $data['home_mobile'],
            'present_contact' => $data['present_contact'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function showRegistrationForm()
    {
        return view('frontend.auth.register');
    }
}
