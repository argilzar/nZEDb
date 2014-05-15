<?php
require_once 'www' . DIRECTORY_SEPARATOR . 'config.php';

use nzedb\db\DB;

$pdo = new DB();

if ($pdo->isDbVersionAtLeast('5.5')) {
	echo "Db at least 5.5 as expected\n";
} else {
	echo "Error: Db version too old\n";
}

?>
