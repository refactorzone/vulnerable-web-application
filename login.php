<?php
/**
 * Warning! This code was written to be broken ON PURPOSE! Every single piece of it is bad quality ON PURPOSE! DON'T
 * EVER USE THIS FOR ANYTHING! PLEASE!
 */

require_once(__DIR__ . '/lib/libs.php');

$result = $db->query('
  SELECT
    username,
    admin
  FROM
    users
  WHERE
    username="' . $_POST['username'] . '"
    AND
    password="' . $_POST['password'] . '"
');

$results = $result->fetch_assoc();

if ($results['username']) {
    $_SESSION['username'] = $results['username'];
    $_SESSION['admin'] = (bool)$results['admin'];
    header('Location: /dashboard.php');
} else {
    header('Location: /');
}

