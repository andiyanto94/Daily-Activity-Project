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
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
	    'client_id' => '307774486282470',
	    'client_secret' => '24dfb908cd16559de3f346e91864febb',
	    'redirect' => 'http://localhost/project/callback/facebook',
    ],

    'twitter' => [
	    'client_id' => 'pmbUdNLvEPM0NZDoTXrUNkcZo', // configure with your app id
	    'client_secret' => 'yNWTo4zTAjayEbsWzlKmYFvRmf9y6CahzY4xGgrMhDcK9F52mO', // your app secret
	    'redirect' => 'http://localhost/project/callback/twitter', // leave blank for now
    ],

    'google' => [
	    'client_id' => '962659084778-dl60qe32ppmtko8hpnba07qc5k9ncqfn.apps.googleusercontent.com', // configure with your app id
	    'client_secret' => 'lY-DTzkoF6ZjxO9vhKMKnouH', // your app secret
	    'redirect' => 'http://localhost/project/callback/google', // leave blank for now
    ],

    'linkedin' => [
	    'client_id' => '75khxbxxdwuzkb', // configure with your app id
	    'client_secret' => 'hB2NeVqCrDeObo6O', // your app secret
	    'redirect' => 'http://localhost/project/callback/linkedin', // leave blank for now
    ],

];
