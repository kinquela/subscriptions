<?php

namespace App\Services\Adapters;

class MockAdapter {

    public function login($email, $password) {
        if ($email == 'solo@mercadopago.com') {
            return [
                "id"=> $id,
                "first_name"=> "Sergio",
                "last_name"=> "Ivan",
                'email' => 'solo@mercadopago.com',
                "mercadopago_customer_id"=> null,
                "password"=> "bevy1234",
                "remember_token"=> "",
                "created_at"=> "2017-04-06 16:42:16",
                "updated_at"=> "2017-04-06 16:42:16",
                "customer_subscriptions"=> [],
                "customer_cards"=> [],
                "customers_addresses"=> []            ];
        } else {
            return [
                "id" => 1,
                "first_name" => "",
                "last_name" => "",
                "email" => $email,
                "mercadopago_customer_id" => "68911140-buMWgPLP7TQaNR",
                "password" => "bevy1234",
                "remember_token" => "",
                "created_at" => "2017-04-06 16:42:16",
                "updated_at" => "2017-04-06 16:42:16",
                "customer_subscriptions" => [
                  [
                    "id" => 3,
                    "customer_id" => "1",
                    "customer_address_id" => "2",
                    "subscription_id" => "1",
                    "expired_at" => "0000-00-00",
                    "status" => "active",
                    "created_at" => null,
                    "updated_at" => null
                  ]
                ],
                "customer_cards" => [
                  [
                    "id" => 1,
                    "customer_id" => "1",
                    "mercadopago_card_id" => "ff8080814cbd77a8014cc",
                    "public_key" => "TEST-ac4dcb05-4037-4d53-a9da-ccbd488e9054",
                    "card_id" => "1234",
                    "luhn_validation" => "1",
                    "status" => "active",
                    "date_used" => "2015-04-16 13:06:25",
                    "card_number_length" => "16",
                    "date_created" => "2015-04-16 13:06:25",
                    "first_six_digits" => "450995",
                    "last_four_digits" => "3704",
                    "security_code_length" => "3",
                    "expiration_month" => "6",
                    "expiration_year" => "2017",
                    "created_at" => "2017-04-06 18:59:51",
                    "updated_at" => "2017-04-06 18:59:51"
                  ]
                ],
                "customers_addresses" => [
                  [
                    "id" => 2,
                    "customer_id" => "1",
                    "region_id" => "1",
                    "city" => "BS AS",
                    "postcode" => "1714",
                    "street1" => "street1",
                    "street2" => "street2",
                    "floor" => null,
                    "apartment" => null,
                    "street_nr" => "",
                    "poi" => null,
                    "formated" => null,
                    "fullname" => "",
                    "identification_number" => "",
                    "phone_number" => "",
                    "created_at" => null,
                    "updated_at" => null
                  ]
                ]
            ];
        }
    }

    public function getCustomerById($id)
    {
        if ($id != 1) {
            return [
                "id"=> $id,
                "first_name"=> "Sergio",
                "last_name"=> "Ivan",
                'email' => 'solo@mercadopago.com',
                "mercadopago_customer_id"=> null,
                "password"=> "bevy1234",
                "remember_token"=> "",
                "created_at"=> "2017-04-06 16:42:16",
                "updated_at"=> "2017-04-06 16:42:16",
                "customer_subscriptions"=> [],
                "customer_cards"=> [],
                "customers_addresses"=> []
            ];
        } else {
            return [
              "id"=> 1,
              "first_name"=> "user_name",
              "last_name"=> "user_last_name",
              "email"=> "testing@gmail.com",
              "mercadopago_customer_id"=> "68911140-buMWgPLP7TQaNR",
              "password"=> "bevy1234",
              "remember_token"=> "",
              "created_at"=> "2017-04-06 16:42:16",
              "updated_at"=> "2017-04-06 16:42:16",
              "customer_subscriptions"=> [
                [
                  "id"=> 3,
                  "customer_id"=> "1",
                  "customer_address_id"=> "2",
                  "subscription_id"=> "1",
                  "expired_at"=> "0000-00-00",
                  "status"=> "active",
                  "created_at"=> null,
                  "updated_at"=> null,
                  "subscription"=> [
                    "id"=> 1,
                    "title"=> "Bevybar suscripcion cerveza mensual",
                    "image"=> "//cdn.shopify.com/s/files/1/1558/6077/t/3/assets/product-subscription-12-pack.png?14655754518974374501",
                    "price"=> "1",
                    "description"=> "Bevybar suscripcion cerveza mensual",
                    "status"=> "active",
                    "frequency"=> "monthy",
                    "created_at"=> "2017-04-05 16:42:16",
                    "updated_at"=> "2017-04-05 16:42:16",
                    "plan_id"=> "1160508ea1b5420fb69ac79d9d15e1bf"
                  ]
                ]
              ],
              "customer_cards"=> [
                [
                  "id"=> 1,
                  "customer_id"=> "1",
                  "mercadopago_card_id"=> "ff8080814cbd77a8014cc",
                  "public_key"=> "TEST-ac4dcb05-4037-4d53-a9da-ccbd488e9054",
                  "card_id"=> "1234",
                  "luhn_validation"=> "1",
                  "status"=> "active",
                  "date_used"=> "2015-04-16 13:06:25",
                  "card_number_length"=> "16",
                  "date_created"=> "2015-04-16 13:06:25",
                  "first_six_digits"=> "450995",
                  "last_four_digits"=> "3704",
                  "security_code_length"=> "3",
                  "expiration_month"=> "6",
                  "expiration_year"=> "2017",
                  "created_at"=> "2017-04-06 18:59:51",
                  "updated_at"=>   "2017-04-06 18:59:51"
                ]
              ],
              "customers_addresses"=> [
                [
                  "id"=> 2,
                  "customer_id"=> "1",
                  "region_id"=> "1",
                  "city"=> "BS AS",
                  "postcode"=> "1714",
                  "street1"=> "street1",
                  "street2"=> "street2",
                  "floor"=> null,
                  "apartment"=> null,
                  "street_nr"=> "",
                  "poi"=> null,
                  "formated"=> null,
                  "fullname"=> "",
                  "identification_number"=> "",
                  "phone_number"=> "",
                  "created_at"=> null,
                  "updated_at"=> null
                ]
              ]
           ];
        }
    }

    public function createCustomer($customerData) {
        return [
          "id"=> 1,
          "first_name"=> "user_name",
          "last_name"=> "user_last_name",
          "email"=> "testing@gmail.com",
          "mercadopago_customer_id"=> null,
          "password"=> "bevy1234",
          "remember_token"=> "",
          "created_at"=> "2017-04-06 16:42:16",
          "updated_at"=> "2017-04-06 16:42:16",
          "customer_subscriptions"=> [],
          "customer_cards"=> [],
          "customers_addresses"=> []
        ];
    }

    public function getSubscriptions() {
        return
          [
            [
              "id" => 1,
              "title"=> "Bevybar suscripcion cerveza mensual",
              "image"=> "//cdn.shopify.com/s/files/1/1558/6077/t/3/assets/product-subscription-12-pack.png?14655754518974374501",
              "price"=> "1",
              "description"=> "Bevybar suscripcion cerveza mensual",
              "status"=> "active",
              "frequency"=> "monthy",
              "created_at"=> "2017-04-05 16:42:16",
              "updated_at"=> "2017-04-05 16:42:16",
              "plan_id"=> "1160508ea1b5420fb69ac79d9d15e1bf"
            ],
            [
              "id"=> 2,
              "title"=> "Bevybar suscripcion vinos mensual",
              "image"=> "//cdn.shopify.com/s/files/1/1558/6077/t/3/assets/product-subscription-12-pack.png?14655754518974374501",
              "price"=> "2",
              "description"=> "Bevybar suscripcion vinos mensual",
              "status"=> "active",
              "frequency"=> "monthy",
              "created_at"=> "2017-04-05 16=>42=>16",
              "updated_at"=> "2017-04-05 16=>42=>16",
              "plan_id"=> "1160508ea1b5420fb69ac79d9d15e1bf"
            ]
          ];
    }

    public function getSubscription($id) {
        return
          [
            "id" => 1,
            "title"=> "Cervezas Europeas",
            "image"=> "//cdn.shopify.com/s/files/1/1558/6077/t/3/assets/product-subscription-12-pack.png?14655754518974374501",
            "price"=> "$499.00",
            "description"=> "6 cervezas todos los meses en tu casa",
            "status"=> "active",
            "frequency"=> "monthy",
            "created_at"=> "2017-04-05 16:42:16",
            "updated_at"=> "2017-04-05 16:42:16",
            "plan_id"=> "1160508ea1b5420fb69ac79d9d15e1bf"
          ];
    }

    public function createSubscription($newCustomerSubscription) {
      return
        [
          "status" => 200,
          "message"=> "The subscription was successfully created"
        ];

    }

}
