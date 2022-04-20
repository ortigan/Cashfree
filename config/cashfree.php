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
    ]

];