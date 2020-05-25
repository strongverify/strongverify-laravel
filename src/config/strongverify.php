
<?php

return [

    /*
    |--------------------------------------------------------------------------
    |   Your auth0 domain
    |--------------------------------------------------------------------------
    |   As set in the auth0 administration page
    |
    */
    'auth0_domain'        => env( 'AUTH0_DOMAIN' ),

    /*
    |--------------------------------------------------------------------------
    |   Your APP id
    |--------------------------------------------------------------------------
    |   As set in the auth0 administration page
    |
    */
    'auth0_client_id'     => env( 'AUTH0_CLIENT_ID' ),

    /*
    |--------------------------------------------------------------------------
    |   Your APP secret
    |--------------------------------------------------------------------------
    |   As set in the auth0 administration page
    |
    */
    'auth0_client_secret' => env( 'AUTH0_CLIENT_SECRET' ),

    /*
    |--------------------------------------------------------------------------
    |   The StrongVerify API URI
    |--------------------------------------------------------------------------
    |   As set in the auth0 administration page
    |
    */
    'sv_api_base_uri' => env( 'AUTH)_API_BASE_URI' )
];