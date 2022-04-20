<?php 

namespace Ortigan\Cashfree;

use Illuminate\Support\Facades\Http;
use Exception;
class AutoCollect extends Request {
    
    //constructor
    public function __construct() {
        parent::$request_type = 'auto_collect';
    }
    public function getVirtualAccounts(array $params = null)
    {
        $route = '/cac/v1/allVA' . Util::arrayToParams($params);
        return $this->get($route);
    }
    public function createVirtualAccount(array $data){
        $route ='/cac/v1/createVA';
        return parent::post($route, $data);
    }
    public  function getVirtualAccount($vAccountId){
        $route = '/cac/v1/va/' . $vAccountId;
        return parent::get($route);
    }
    public function changeVAStatus( string $vAccountId, string $status)
    {
        $route = '/cac/v1/changeVAStatus';
        return parent::post($route, [
            'vAccountId' => $vAccountId,
            'status' => $status
        ]);
    }
    public function createQR(string $virualVPA)
    {
        $route = '/cac/v1/createQRCode' . Util::arrayToParams([
            'virtualVPA' => $virualVPA
        ]);
        return parent::get($route);
    }
    public function createDynamicQR(string $virualVPA, float $amount)
    {
        $route = '/cac/v1/createDynamicQRCode' . Util::arrayToParams([
            'virtualVPA' => $virualVPA,
            'amount' => $amount
        ]);
        return parent::get($route);
    }
    public function getRecentPayments(array $params = null)
    {
        $route = '/cac/v1/payments' . Util::arrayToParams($params);
        return parent::get($route);
    }
    public function getRecentVAPayments(string $vAccountId)
    {
        $route = '/cac/v1/payments/' . $vAccountId;
        return parent::get($route);
    }
}
