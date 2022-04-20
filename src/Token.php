<?php 

namespace Ortigan\Cashfree;

use Illuminate\Support\Facades\Http;
use Exception;

class Token {
    public $payout_clientId, $payout_clientSecret;
    public static $clientId, $clientSecret;
    //constructor
    public function setKeys($type)
    {
        self::$clientId = config('cashfree.' . $type . '.client_id');
        self::$clientSecret = config('cashfree.' . $type . '.secret_key');
    }
    public function getAuthUrl($type)
    {
        $auth_route = config('cashfree.' . $type . '.auth_route');
        return Request::baseUrl() . $auth_route;
    }
    public function getToken($type){
        $this->setKeys($type);
        $response = Http::withHeaders([
            'X-Client-ID' => self::$clientId,
            'X-Client-Secret' => self::$clientSecret
        ])->post($this->getAuthUrl($type));
        $res = $response->json();
        if ($res['status'] == 'SUCCESS') {
            return $res['data']['token'];
        } else {
            throw new Exception($response->body(), 1);
        }
    }

}