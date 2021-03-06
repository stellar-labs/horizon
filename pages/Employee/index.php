<?php

namespace Controller\Employee;

use function Horizon\dd;
use function Horizon\response;
use function Horizon\getRecords;
use function Horizon\checkFunctionDoNotExist;

checkFunctionDoNotExist("index");

function index() {
	$employees = getRecords("employees");
	$numberOfEmployess = count($employees);

	return response(["text" => "$numberOfEmployess employees found", "status" => 200]);
}
