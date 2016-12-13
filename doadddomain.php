<?php

require_once(__DIR__ . '/lib/libs.php');

$sql = '
INSERT INTO domains (user_id, name, expires) VALUES (
	"' . $_SESSION['user_id'] . '",
	"' . $_POST['domain'] . '",
	DATE_ADD(NOW(), INTERVAL 365 DAY)
)';
$db->query($sql);

header('Location: /dashboard.php');