<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => '',
        'secret' => '',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key' => '',
        'secret' => '',
    ],

    'github' => [
        'client_id'     => 'c6880be0eaf00a2bd216',
        'client_secret' => '388997a68e0675b317a32ffab239a5b6cb88ea14',
        'redirect'      => 'http://localhost/FoodleApp/public/login',
    ],

    'facebook' => [
        'client_id'     => '1013022692094705',
        'client_secret' => '3b31bb0dbb4660130657d53d0566dca2',
        'redirect'      => 'http://localhost/Foodle/public/home/facebook',
    ],

    'google' => [
        'client_id'     => '303883614247-180bepcdfjbgkc4t5of61bb7q6rdn7ii.apps.googleusercontent.com',
        'client_secret' => 'zPMe5jWg4l62kWHo8n2Pv2fS',
        'redirect'      => 'http://localhost/Foodle/public/home/google',
    ],

];
