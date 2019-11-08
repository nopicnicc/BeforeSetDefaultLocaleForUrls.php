# BeforeSetDefaultLocaleForUrls.php
Middleware set locale from url

protected $routeMiddleware = [
  ...
    'localize' => \App\Http\Middleware\BeforeSetDefaultLocaleForUrls::class,
  ...
];
