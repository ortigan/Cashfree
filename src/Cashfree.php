<?php 

namespace Ortigan\Cashfree;

class Cashfree {
    
    public static function auto_collect()
    {
        return new AutoCollect();
    }
    public static function payout()
    {
        return new Payout();
    }
    public static function verification()
    {
        return new Verification();
    }
    public static function subscription()
    {
        return new Subscription();
    }
    public static function paymentGateway()
    {
       return new Payment();
    }
}