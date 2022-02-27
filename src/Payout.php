<?php 

namespace Ortigan\Cashfree;

use Illuminate\Support\Facades\Http;

class Payout {
    private $token, $token_expiry;
    //constructor
    public function __construct($clientId, $clientSecret) {
        $this->getToken($clientId, $clientSecret);
    }
    public function baseUrl()
    {
        return config('cashfree.sandbox') ? config('cashfree.payout.test_base_url') : config('cashfree.payout.prod_base_url');
    }
    public function getToken($clientId, $clientSecret){
        $url = $this->baseUrl() . '/cac/v1/authorize';
        $response = Http::withHeaders([
            'X-Client-ID' => $clientId,
            'X-Client-Secret' => $clientSecret
        ])->post($url);
        $this->token = $response->json()['data']['token'];
        $this->token_expiry = $response->json()['data']['expiry'];
    }
}