<?php
/**
 * Warning! This code was written to be broken ON PURPOSE! Every single piece of it is bad quality ON PURPOSE! DON'T
 * EVER USE THIS FOR ANYTHING! PLEASE!
 */

ini_set('display_errors', 1);

session_start();
list($path, ) = explode('?', $_SERVER['REQUEST_URI'], 2);

require_once(__DIR__ . '/db.php');
