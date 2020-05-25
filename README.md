StrongVerify PHP SDK for Laravel
================================

Installation
------------

Install the package using Composer:

```bash
// install composer package
composer require strongverify/sdk-laravel

// publish configuration
php artisan vendor:publish --provider="StrongVerify\SDK\StrongVerifyServiceProvider"
```

After this, edit `config/strongverify.php` or set the appropriate env vars:

```bash
#!/bin/bash
export AUTH0_DOMAIN=__sv_domain__
export AUTH0_CLIENT_ID=__client_id__
export AUTH0_CLIENT_SECRET=__client_secret__
export SV_API_BASE_URI=https://sandbox.strongverify.com
```

Usage
-----

```php
use StrongVerify/SDK;

// use facade anywhere in code

public function version()
{
    echo StrongVerify::version();
}
```