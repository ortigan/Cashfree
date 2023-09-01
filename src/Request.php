<?php 

namespace Ortigan\Cashfree;

use Illuminate\Support\Facades\Http;
use Exception;
class Request extends Token {
    protected static $request_type;
    public static function baseUrl()
    {
        return config('cashfree.sandbox') ? config('cashfree.' . self::$request_type . '.test_base_url') : config('cashfree.' . self::$request_type . '.prod_base_url');
    }
    public function get($route)
    {
        try {
            if ( self::$request_type == 'verification' || self::$request_type == 'payment_gateway' ) {
                parent::setKeys(self::$request_type);
                $response = Http::withHeaders([
                    'x-client-id' => parent::$clientId,
                    'x-client-secret' => parent::$clientSecret,
                    'x-api-version' => '2023-08-01'
                    ])->get( self::baseUrl() . $route);
            } else {
                $response = Http::withToken($this->getToken( self::$request_type ))->get( self::baseUrl() . $route);
            }
            return self::response($response);
        } catch ( Exception $e ){
            throw new Exception($e, 1);
        }
    }
    public function post($route, $data)
    {
        try {
            if ( self::$request_type == 'verification' || self::$request_type == 'payment_gateway' ) {
                parent::setKeys(self::$request_type);
                $response = Http::withHeaders([
                    'x-client-id' => parent::$clientId,
                    'x-client-secret' => parent::$clientSecret,
                    'x-api-version' => '2023-08-01'
                ])->post( self::baseUrl() . $route, $data);
            } else {
                $response = Http::withToken($this->getToken( self::$request_type ))->post( self::baseUrl() . $route, $data);
            }
            return self::response($response);
        } catch ( Exception $e ){
            throw new Exception($e, 1);
        }
    }
    public static function response($response)
    {
       
        return (object) collect($response->json())->all();
      
    }
    
}