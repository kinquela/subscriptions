<?php

namespace App\Services;

use App;

class SubscriptionService {

    protected $persistanceAdapter;

    public function __construct() {
        $this->persistanceAdapter = App::make('PersistanceAdapter');
    }

    public function getSubscriptions(){
       $subscriptions = $this->persistanceAdapter->getSubscriptions();
       return $subscriptions;
    }

    public function getSubscription($id){
       $subscriptions = $this->persistanceAdapter->getSubscription($id);
       return $subscriptions;
    }

    public function createSubscription($newCustomerSubscription){
       $subscriptions = $this->persistanceAdapter->createSubscription($newCustomerSubscription);
       return $subscriptions;
    }


}
