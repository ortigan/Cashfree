# Cashfree library for laravel
Simplified laravel library for cashfree integration. The package provides easy to use functions that will enable you to integrate cashfree API's seamlessly  

## Installation
You can install the package via composer:
```bash
composer require ortigan/cashfree
```
You can optionally publish the config file with:
```bash
 php artisan vendor:publish --provider="Ortigan\Cashfree\CashfreeServiceProvider" --tag="cashfree-config"
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

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.