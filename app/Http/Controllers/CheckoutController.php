<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller {

    public function __construct(\App\Services\CustomerService $customerService, \App\Services\SubscriptionService $subscriptionService) {
        $this->middleware('auth');
        $this->customerService = $customerService;
        $this->subscriptionService = $subscriptionService;
    }

    public function index(Request $request) {
        $subscriptionId = $request->get('subscription');
        $user = Auth::user();
        if($user->isSubscribed($subscriptionId)){
            return redirect('/customer');
        }
        $subscription = $this->subscriptionService->getSubscription($subscriptionId);

        return view('checkout.index', [
          'user' => $user,
          'subscription' => $subscription
        ]);
    }

    public function check() {

    }

    public function success(Request $request) {
        $user = Auth::user();
        #HASTA ACA TENGO LA TARJETA TOKENIZADA.
        #dump($card);exit;
        $card = $request->all();

        #$newCustomerSubscription = [
        #  'customer_address' => [
        #    'customer_id' => $card['user_id'],
        #    'region_id' => 1,
        #    'city' => $card['ciudad'],
        #    "provincia" => "Ciudad Autónoma de Buenos Aires"
        #    'street1' => $card['calle'],
        #    'street_nr' => $card['numero'],
        #    'floor' => $card['piso'],
        #    'apartament' => $card['dpto'],
        #    'phone_number' => $card['telefono'],
        #    'postcode' => $card['cp']
        #  ],
        #  'customer_card' => [
        #    'customer_id' => $card['user_id'],
        #    'mercadopago_card_id' => $card['card_token_id'],
        #    'payment_method_id' => $card['paymentMethodId']
        #  ],
        #  'customer_subscription' => [
        #    'customer_id' => $card['user_id'],
        #    'subscription_id' => $card['user_id']
        #    #'cutomer_address_id' => $card['user_id'],
        #    #'status' => $card['status'],
        #  ]
        #];

        #$subscription = $this->subscriptionService->createSubscription($newCustomerSubscription);

        return view('checkout.success', [
          'user' => $user
          #,'subscription' => $subscription
        ]);
    }

}
