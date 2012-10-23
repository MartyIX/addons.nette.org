<?php

require_once __DIR__ . '/bootstrap.php';

$http = new HttpPHPUnit\Main();

$cvg = $http->coverage(__DIR__ . '/../app', __DIR__ . '/coverage');
if ($cvg) {
	$cvg->setProcessUncoveredFilesFromWhitelist(FALSE);
}

$http->run(__DIR__ . '/cases');
