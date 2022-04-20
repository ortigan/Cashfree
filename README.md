![ cashfree library ](https://res.cloudinary.com/binarycode/image/upload/v1650452931/CashfreexLaravel/Laravel_integration_for_cashfree_X_Ortigan_Git_v2_g3kops.png)
# Cashfree package for laravel
[![Total Downloads](http://poser.pugx.org/ortigan/cashfree/downloads)](https://packagist.org/packages/ortigan/cashfree) [![License](http://poser.pugx.org/ortigan/cashfree/license)](https://packagist.org/packages/ortigan/cashfree) 

Simplified laravel package for cashfree integration. The package provides easy to use functions that will enable you to integrate cashfree API's seamlessly.

## Installation
You can install the package via composer:
```bash
composer require ortigan/cashfree
```
You can optionally publish the config file with:
```bash
 php artisan vendor:publish --provider="Ortigan\Cashfree\CashfreeServiceProvider" --tag="cashfree-config"
```

## Configuration
Modify your `.env`

### Required
```
// required if you use "Auto Collect" 
CASHFREE_AUTO_COLLECT_CLIENT_ID=
CASHFREE_AUTO_COLLECT_SECRET_KEY=

// required if you use "Payout"
CASHFREE_PAYOUT_CLIENT_ID=
CASHFREE_PAYOUT_CLIENT_KEY=
```

### Optional
```
CASHFREE_SANDBOX=true|false
CASHFREE_AUTO_COLLECT_TEST_URL=
CASHFREE_AUTO_COLLECT_PROD_URL=
CASHFREE_AUTO_COLLECT_AUTH_ROUTE=
CASHFREE_PAYOUT_TEST_URL=
CASHFREE_PAYOUT_PROD_URL=
CASHFREE_PAYOUT_AUTH_ROUTE=
```

## Basic Usage

```php
use Ortigan/Cashfree/Cashfree;

$virtualAccount = Cashfree::auto_collect()->createVirtualAccount([
     'vAccountId' => 'johndoe_1324',
     'name' => John Doe,
     'phone' => "9999999999",
     'email' => 'johndoe@gmail.com',
     'min_amount' => 50000,
     'max_amount' => 500000
 ]);
```

Response
```json
{
    "status": "SUCCESS",
    "subCode": "200",
    "message": "Virtual account added successfully",
    "data": [
        "accountNumber": "CASHFREE1234VATEST",
        "ifsc": "YESB0CMSNOC"
    ]
}
```

## Services incuded

- Payout
- Auto Collect


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.