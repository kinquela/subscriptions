<?php

namespace App\Services\Adapters;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;

class ApiAdapter {

    protected $url;
    protected $client;

    public function __construct() {
        $this->url = env('API_URL');
        $this->client = new Client(['base_uri' => $this->url]);
    }

    public function getSubscriptions()
    {
        $url = $this->url . '/subscriptions';
        $data = [
            #'headers' => $this->getHeaders(),
        ];

        try {
            $response = $this->makeRequest('GET', $url, $data);
            return $response;
        } catch (Exception $e) {
            throw new \Exception("API Error getSubscriptions: " . $e->getMessage());
        }
    }

    public function getSubscription($id)
    {
        $url = $this->url . '/subscriptions/' . $id;
        $data = [
            #'headers' => $this->getHeaders(),
        ];

        try {
            $response = $this->makeRequest('GET', $url, $data);
            return $response;
        } catch (Exception $e) {
            throw new \Exception("API Error getSubscriptions: " . $e->getMessage());
        }
    }

    public function createSubscription($newCustomerSubscription) {
      return
        [
          "status" => 200,
          "message"=> "The subscription was successfully created"
        ];

    }

    public function getCustomerById($id)
    {
        $url = $this->url . '/customers/' . $id;
        $data = [
            #'headers' => $this->getHeaders(),
        ];

        try {
            $response = $this->makeRequest('GET', $url, $data);
            return $response;
        } catch (Exception $e) {
            throw new \Exception("API Error getSubscriptions: " . $e->getMessage());
        }
    }

    public function login($email, $password)
    {
        $url = $this->url . '/authenticate/login';
        $data = [
            #'headers' => $this->getHeaders(),
            'headers' => ['Content-Type' => 'application/json'],
            'json' => ["email" => $email, "password" => $password]
        ];

        try {
            $response = $this->makeRequest('POST', $url, $data);
            return $response;
        } catch (Exception $e) {
            throw new \Exception("API Error getSubscriptions: " . $e->getMessage());
        }
    }

    public function createCustomer($customerData) {
        $url = $this->url . '/authenticate/register';
        $data = [
            #'headers' => $this->getHeaders(),
            'headers' => ['Content-Type' => 'application/json'],
            'json' => $customerData
        ];
        try {
            $response = $this->makeRequest('POST', $url, $data);
            return $response;
        } catch (Exception $e) {
            throw new \Exception("API Error getSubscriptions: " . $e->getMessage());
        }
    }


    private function makeRequest($method, $url, $data)
    {
        try {
            $request = $this->client->$method($url, $data);
            $response = json_decode($request->getBody(),true);
        } catch (ClientException $e) {
            throw new \Exception("API Error getSubscriptions: " . $e->getMessage());
        } catch (RequestException $e) {
            throw new \Exception("API Error getSubscriptions: " . $e->getMessage());
        } catch (\Exception $e) {
            throw new \Exception("API Error getSubscriptions: " . $e->getMessage());
        }
        return $response;
    }

}
