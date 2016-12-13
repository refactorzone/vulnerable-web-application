<?php
/**
 * Warning! This code was written to be broken ON PURPOSE! Every single piece of it is bad quality ON PURPOSE! DON'T
 * EVER USE THIS FOR ANYTHING! PLEASE!
 */

require_once(__DIR__ . '/lib/libs.php');

$sql = '
  SELECT
    id,
    username,
    admin
  FROM
    users
  WHERE
    username="' . $_POST['username'] . '"
    AND
    password="' . $_POST['password'] . '"
';

$result = $db->query($sql);

$results = $result->fetch_assoc();

if ($results['username']) {
	$_SESSION['user_id'] = $results['id'];
    $_SESSION['username'] = $results['username'];
    $_SESSION['admin'] = (bool)$results['admin'];
    header('Location: /dashboard.php');
} else {
    header('Location: /');
}

