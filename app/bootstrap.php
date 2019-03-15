<?php
/**
 * Created by PhpStorm.
 * User: Taijul
 * Date: 2/26/2019
 * Time: 12:36 AM
 */
//Load config
require_once 'config/config.php';

//Auto Load Libraries
spl_autoload_register(function ($className) {
    require_once 'libraries/' . $className . '.php';
});