<?php 

namespace Ortigan\Cashfree;

class Verification extends Request {
    //constructor
    public function __construct() {
        parent::$request_type = 'verification';
    }
    public function pan( string $pan_number )
    {
        $data = [
            'pan' => $pan_number
        ];
        $route = '/pan';
        return parent::post($route, $data);
    }
    public function aadhaar(string $aadhaar_number)
    {
        $data = [
            'aadhaarNumber' => $aadhaar_number
        ];
        $route = '/aadhaar';
        return parent::post($route, $data);
    }
    public function aadhaar_offline_otp(string $aadhaar_number)
    {
        $data = [
            'aadhaar_number' => $aadhaar_number
        ];
        $route = '/offline-aadhaar/otp';
        return parent::post($route, $data);
    }
    public function aadhaar_offline_verify(string $ref_id, string $otp)
    {
        $data = [
            'ref_id' => $ref_id,
            'otp' => $otp
        ];
        $route = '/offline-aadhaar/verify';
        return parent::post($route, $data);
    }
    public function verify_GSTIN( string $gstin, string $businessName = null )
    {
        $data = [
            'GSTIN' => $gstin,
            'businessName' => $businessName
        ];
        $route = '/gstin';
        return parent::post($route, $data);
    }

}