<?php 

namespace Ortigan\Cashfree;


class Payment extends Request {
    //constructor
    public function __construct()
    {
        parent::$request_type = 'payment_gateway';
    }
    public function createOrder( array $data ){
        $route = '/orders';
        return parent::post($route, $data);
    }
    public function getOrder($order_id){
        $route = '/orders/' . $order_id;
        return parent::get($route);
    }
    public function orderPayment($order_id){
        $route = '/orders/' . $order_id . '/payments';
        return parent::get($route);
    }
}