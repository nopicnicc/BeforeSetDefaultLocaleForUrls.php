# BeforeSetDefaultLocaleForUrls.php
Middleware set locale from url

```php
protected $routeMiddleware = [
  ...
    'localize' => \App\Http\Middleware\BeforeSetDefaultLocaleForUrls::class,
  ...
];
