<?php 

namespace Ortigan\Cashfree;

use Illuminate\Support\Facades\Http;

class AutoCollect {
    private $token, $token_expiry;
    //constructor
    public function __construct($clientId, $clientSecret) {
        $this->getToken($clientId, $clientSecret);
    }
    public function baseUrl()
    {
        return config('cashfree.sandbox') ? config('cashfree.auto_collect.test_base_url') : config('cashfree.auto_collect.prod_base_url');
    }
    public function createVirtualAccount($data){
        $url = $this->baseUrl() . '/cac/v1/createVA';
        $response = Http::withToken($this->token)->post($url, $data);
        if ($response->status() == 200) {
            return (object) collect($response->json())->all();
        }
        else {
            return (object) collect($response->json())->all();
        }
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