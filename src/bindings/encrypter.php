<?php

use Illuminate\Encryption\Encrypter;

$waffle_app->bind('encrypter', function ($waffle_app) {
    /*
    * This WAFFLE_ENCRYPTER_KEY is used by the Illuminate encrypter service and should be set
    * to a random, 16-character string, otherwise these encrypted strings
    * will not be safe. Please do this before deploying an application!
    */
    if (!defined('WAFFLE_ENCRYPTER_KEY')) {
        throw new Exception('You must define WAFFLE_ENCRYPTER_KEY before using the waffle_encrypter function.');
    }

    return new Encrypter(WAFFLE_ENCRYPTER_KEY);
});
