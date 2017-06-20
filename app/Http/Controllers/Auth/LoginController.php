<?php

namespace App\Http\Controllers\Auth;

use App\Services\CustomerService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;




class LoginController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles authenticating users for the application and
      | redirecting them to your home screen. The controller uses a trait
      | to conveniently provide its functionality to your applications.
      |
     */

use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $customerService;
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CustomerService $customerService) {
       $this->customerService = $customerService;
       $this->middleware('guest');
    }

     /**
      * Get a validator for an incoming registration request.
      *
      * @param  array  $data
      * @return \Illuminate\Contracts\Validation\Validator
      */
    #protected function validator(array $data) {
       #return Validator::make($data, [
       #]);
    #}

     /**
      * Create a new user instance after a valid registration.
      *
      * @param  array  $data
      * @return User
      */
    protected function retrieveByCredentials(array $data)
    {
        xdebug_break();
        return $this->customerService->getCustomerByCredentials([
                   'email' => $data['email'],
                   'password' => Hash::make($data['password']),
        ]);
    }

//    protected function authenticated(\Illuminate\Http\Request $request, $customer) {
//        if ($customer->subscriptions) {
//            return redirect('/customer');
//        }
//        return redirect($this->redirectTo);
//    }

}
