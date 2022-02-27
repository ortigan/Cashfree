<?php

return [

    'sandbox' => env('CASHFREE_SANDBOX', true),

    'client_id' => env('CASHFREE_CLIENT_ID', null),

    'secret_key' => env('CASHFREE_SECRET_KEY', null),

    'auto_collect' => [
        'test_base_url' => env('CASHFREE_AUTO_COLLECT_TEST_URL', 'https://cac-gamma.cashfree.com'),
        'prod_base_url' =>  env('CASHFREE_AUTO_COLLECT_PROD_URL', 'https://cac-api.cashfree.com'),
    ],
    'payout' => [
        'test_base_url' => env('CASHFREE_AUTO_COLLECT_TEST_URL', 'https://payout-gamma.cashfree.com'),
        'prod_base_url' =>  env('CASHFREE_AUTO_COLLECT_PROD_URL', 'https://payout-api.cashfree.com'),
    ]

];