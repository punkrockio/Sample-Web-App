<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers;

    protected $redirectAfterLogout = '/';
    protected $redirectTo = '/admin/post';

    /**
     * Create a new authentication controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }


    /**
    * Create a new user instance after a valid registration.
    *
    * @param  array  $data
    * @return User
    */
   protected function create(array $data)
   {
       return User::create([
           'name' => $data['name'],
           'email' => $data['email'],
           'password' => bcrypt($data['password']),
       ]);
   }


   public function postLoginFromHomepage(Request $request)
   {
      if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            
            return redirect()->intended('/admin/post');
      }      
      else{
        return view('homepage')->withError('Username or password doesnt match');
      }

   }

   
}
