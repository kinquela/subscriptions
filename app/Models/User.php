<?php

namespace App\Models;

use Illuminate\Auth\GenericUser;

class User extends GenericUser {


    public function isSubscribed($subscriptionId){
       foreach($this->customer_subscriptions as $subscription){
           if($subscription['subscription_id'] == $subscriptionId){
               return true;
           }
       }
       return false;
    }

    public function getSubscriptions(){
       return $this->customer_subscriptions;
    }


}
