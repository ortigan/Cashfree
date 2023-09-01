<?php

return [

    'sandbox' => env('CASHFREE_SANDBOX', true),

    'auto_collect' => [
        'test_base_url' => env('CASHFREE_AUTO_COLLECT_TEST_URL', 'https://cac-gamma.cashfree.com'),
        'prod_base_url' =>  env('CASHFREE_AUTO_COLLECT_PROD_URL', 'https://cac-api.cashfree.com'),
        'client_id' => env('CASHFREE_AUTO_COLLECT_CLIENT_ID', null),
        'secret_key' => env('CASHFREE_AUTO_COLLECT_SECRET_KEY', null),
        'auth_route' => env('CASHFREE_AUTO_COLLECT_AUTH_ROUTE', '/cac/v1/authorize'),
    ],
    'payout' => [
        'test_base_url' => env('CASHFREE_PAYOUT_TEST_URL', 'https://payout-gamma.cashfree.com'),
        'prod_base_url' =>  env('CASHFREE_PAYOUT_PROD_URL', 'https://payout-api.cashfree.com'),
        'client_id' => env('CASHFREE_PAYOUT_CLIENT_ID', null),
        'secret_key' => env('CASHFREE_PAYOUT_CLIENT_KEY', null),
        'auth_route' => env('CASHFREE_PAYOUT_AUTH_ROUTE', '/payout/v1/authorize'),
    ],
    'verification' => [
        'test_base_url' => env('CASHFREE_VERIFICATION_TEST_URL', 'https://sandbox.cashfree.com/verification'),
        'prod_base_url' =>  env('CASHFREE_VERIFICATION_PROD_URL', 'https://api.cashfree.com/verification'),
        'client_id' => env('CASHFREE_PAYOUT_CLIENT_ID', null),
        'secret_key' => env('CASHFREE_PAYOUT_CLIENT_KEY', null),
    ],
    'payment_gateway' => [
        'test_base_url' => env('CASHFREE_PAYMENT_GATEWAY_TEST_URL', 'https://sandbox.cashfree.com/pg'),
        'prod_base_url' =>  env('CASHFREE_PAYMENT_GATEWAY_PROD_URL', 'https://api.cashfree.com/pg'),
        'client_id' => env('CASHFREE_PAYMENT_GATEWAY_CLIENT_ID', null),
        'secret_key' => env('CASHFREE_PAYMENT_GATEWAY_CLIENT_KEY', null),
    ]
];