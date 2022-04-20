<?php 

namespace Ortigan\Cashfree;


class Payout extends Request {

    //constructor
    public function __construct()
    {
        parent::$request_type = 'payout';
    }
    public function balance()
    {
        $route = '/payout/v1/getBalance';
        return parent::get($route);
    }
    public function createBeneficiary( array $data )
    {
        $route = '/payout/v1/addBeneficiary';
        return parent::post($route, $data);
    }
    public function getBeneficiary($beneId)
    {
        $route = '/payout/v1/getBeneficiary/' . $beneId;
        return parent::get($route);
    }
    public function removeBeneficiary( array $data)
    {
        $route = '/payout/v1/removeBeneficiary';
        return parent::post($route, $data);
    }
    public function getBeneficiaryId(array $params)
    {
        $route = '/payout/v1/getBeneId' . Util::arrayToParams($params);
        return parent::get($route);
    }
    public function getBeneficiaryHistory( array $params )
    {
        $route = '/payout/v1/beneHistory' . Util::arrayToParams($params);
        return parent::get($route);
    }
    public function directTransfer( array $data )
    {
        $route = '/payout/v1/directTransfer';
        return parent::post($route, $data);
    }
    public function getTransferStatus(array $params)
    {
        $route = '/payout/v1.1/getTransferStatus' . Util::arrayToParams($params);
        return parent::get($route);
    }
    public function requestTransfer( array $data )
    {
        $route = '/payout/v1/requestTransfer';
        return parent::post($route, $data);
    }
    public function requestAsyncTransfer( array $data )
    {
        $route = '/payout/v1/requestAsyncTransfer';
        return parent::post($route, $data);
    }
}