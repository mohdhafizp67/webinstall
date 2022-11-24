<?php return array (
  'name' => 'Laravel',
  'env' => 'production',
  'debug' => false,
  'url' => 'http://webinstall.test/',
  'asset_url' => NULL,
  'timezone' => 'UTC',
  'locale' => 'en_US',
  'fallback_locale' => 'en',
  'key' => 'base64:QVV5cFEwZG9BUXlqdlVSbG93ejU3MWlMcUE4UzZGU3U=',
  'cipher' => 'AES-256-CBC',
  'log' => 'daily',
  'providers' => 
  array (
    0 => 'MicroweberPackages\\App\\Providers\\AppServiceProvider',
    1 => 'MicroweberPackages\\App\\Providers\\EventServiceProvider',
    2 => 'MicroweberPackages\\App\\Providers\\RouteServiceProvider',
  ),
  'manifest' => storage_path().DIRECTORY_SEPARATOR.'framework',
);