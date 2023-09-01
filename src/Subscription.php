<?php 

namespace Ortigan\Cashfree;

class Subscription extends Request {
    //constructor
    public function __construct()
    {
        parent::$request_type = 'payment_gateway';
    }
    public function create_plan($data)
    {
        $route = '/v2/subscription-plans';
        return parent::post($route, $data);
    }
    public function create_subscription($data)
    {
        $route = '/v2/subscriptions';
        return parent::post($route, $data);
    }
    public function get_subscription($subReferenceId)
    {
        $route = '/v2/subscriptions/' . $subReferenceId;
        return parent::get($route);
    }
    public function get_subscription_payments($subReferenceId, $lastId = null, $count = 10 )
    {
        $route = '/v2/subscriptions/' . $subReferenceId . '/payments?lastId=' . $lastId . '&count=' . $count;
        return parent::get($route);
    }
    public function get_subscription_payment($subReferenceId, $paymentId)
    {
        $route = '/v2/subscriptions/' . $subReferenceId . '/payments/' . $paymentId;
        return parent::get($route);
    }
    public function cancel_subscription($subReferenceId)
    {
        $route = '/v2/subscriptions/' . $subReferenceId . '/cancel';
        return parent::post($route, []);
    }
    public function charge_subscription($subReferenceId, $data)
    {
        $route = '/v2/subscriptions/' . $subReferenceId . '/charge';
        return parent::post($route, $data);
    }
}