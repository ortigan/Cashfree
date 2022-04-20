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
            $response = Http::withToken($this->getToken( self::$request_type ))->get( self::baseUrl() . $route);
            return self::response($response);
        } catch ( Exception $e ){
            throw new Exception($e, 1);
        }
    }
    public function post($route, $data)
    {
        try {
            $response = Http::withToken($this->getToken( self::$request_type ))->post( self::baseUrl() . $route, $data);
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