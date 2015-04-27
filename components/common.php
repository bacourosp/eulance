<?php
/**
 * Created by PhpStorm.
 * User: gmarten
 * Date: 23/04/15
 * Time: 14:24
 */

/********************************/
/**** Load the language file ****/
/********************************/

    session_start();
    header('Cache-control: private'); // IE 6 FIX

    if(isSet($_GET['lang']))
    {
        $lang = $_GET['lang'];

        // register the session and set the cookie
        $_SESSION['lang'] = $lang;

        setcookie('lang', $lang, time() + (3600 * 24 * 30));
    }
    else if(isSet($_SESSION['lang']))
    {
        $lang = $_SESSION['lang'];
    }
    else if(isSet($_COOKIE['lang']))
    {
        $lang = $_COOKIE['lang'];
    }
    else
    {
        $lang = Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']);//locale_get_default();
    }

    $filename = "components/language/$lang/index.xml";

    if (!file_exists($filename)) {
        $lang = 'en_US';
        $filename = "components/language/$lang/index.xml";
    }

    $xmlLang = simplexml_load_file($filename);

/*********************/
/**** End of Load ****/
/*********************/
