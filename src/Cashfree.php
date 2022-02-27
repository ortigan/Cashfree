<?php 

namespace Ortigan\Cashfree;

class Cashfree {
    private $clientId, $clientSecret;
    //constructor
    public function __construct() {
        $this->clientId = config('cashfree.client_id');
        $this->clientSecret = config('cashfree.secret_key');
    }
    public function auto_collect()
    {
        return new AutoCollect($this->clientId, $this->clientSecret);
    }
    public function payout()
    {
        return new Payout($this->clientId, $this->clientSecret);
    }
}