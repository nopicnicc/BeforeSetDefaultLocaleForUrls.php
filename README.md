# BeforeSetDefaultLocaleForUrls.php
Middleware set locale from url

Add to $routeMiddleware in app/Http/Kernel.php

```php
protected $routeMiddleware = [
  ...
    'localize' => \App\Http\Middleware\BeforeSetDefaultLocaleForUrls::class,
  ...
];
