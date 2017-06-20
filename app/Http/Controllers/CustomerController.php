<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller {

    public function __construct(\App\Services\CustomerService $customerService) {
        $this->middleware('auth');
        $this->customerService = $customerService;
    }

    public function index() {
        $user = Auth::user();

        return view('customer.index', [
            'customer' => $user
        ]);
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }

}
