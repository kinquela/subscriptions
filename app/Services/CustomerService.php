<?php

namespace App\Services;

use Illuminate\Support\Facades\Hash;
use App;

class CustomerService {

    protected $persistanceAdapter;

    public function __construct() {
        $this->persistanceAdapter = App::make('PersistanceAdapter');
    }

    public function register($userData) {
        $customerData = $this->persistanceAdapter->createCustomer($userData);
        return new \App\Models\User($customerData);
    }

    public function login($credentials) {
        $email = $credentials['email'];
        $password = Hash::make($credentials['password']);
        $customerData = $this->persistanceAdapter->login($email, $password);
        if($customerData == []){
            return false;
        }
        return new \App\Models\User($customerData);
    }

    public function getById($id) {
        $customerData = $this->persistanceAdapter->getCustomerById($id);
        $user = new \App\Models\User($customerData);
        return $user;
    }

    public function getSubscriptionsByCustomer($user){
       #$customerSubscriptions = $this->persistanceAdapter->getSubscriptionsByCustomer($user->id);
       $customerSubscriptions = Auth::user()->customer_subscriptions;
       return $customerSubscriptions;
    }

}
