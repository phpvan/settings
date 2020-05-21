<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Changes the table name for the Settings
    |--------------------------------------------------------------------------
    |
    | If left empty as it is by default it will use the predefined table name. Or
    | you can use your own prefix or table name.
    |
    */
    'table' => '',

    /*
    |--------------------------------------------------------------------------
    | Keys to auto encrypt and decrypt
    |--------------------------------------------------------------------------
    |
    | This option controls the settings that will auto be encrypted
    | and decrypted by the Settings package. Expects
    | an object or array of setting 'keys' to be passed here.
    |
    */
    'encrypt' => [],

    /*
    |--------------------------------------------------------------------------
    | Force save settings
    |--------------------------------------------------------------------------
    |
    | This option controls whether settings are forced to be saved. If set to
    | true, this will save any settings without regard to security (i.e.
    | whether the setting has been previously set).
    |
    */
    'force' => false,

    /*
    |--------------------------------------------------------------------------
    | Cache settings
    |--------------------------------------------------------------------------
    |
    | This option controls whether key/values are cached or pulled directly
    | from the database. If this setting is true, cache is enabled.
    | If this setting is false, caching is disabled.
    |
    */
    'cache' => true,

];