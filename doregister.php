<?php
/**
 * Warning! This code was written to be broken ON PURPOSE! Every single piece of it is bad quality ON PURPOSE! DON'T
 * EVER USE THIS FOR ANYTHING! PLEASE!
 */

require_once(__DIR__ . '/lib/libs.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = '
  INSERT INTO users (username, password, admin) VALUES ("' . $username . '", "' . $password . '", 0)';

$db->query($sql);

$_SESSION['user']  = $username;
$_SESSION['admin'] = false;

header('Location: /dashboard.php');
