<?php

// config for JJSoftwareLtd/CurrentGateway
return [
    /*
    |--------------------------------------------------------------------------
    | Subdomain
    |--------------------------------------------------------------------------
    */
    'subdomain' => env('CURRENT_SUBDOMAIN', 'example'),

    /*
    |--------------------------------------------------------------------------
    | API Key
    |--------------------------------------------------------------------------
    */
    'key' => env('CURRENT_KEY', 'YOUR_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Endpoint
    |--------------------------------------------------------------------------
    */
    'endpoint' => 'https://api.current-rms.com/api/v1/',
];
