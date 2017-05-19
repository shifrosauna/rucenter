<?php
require_once __DIR__ . '/PaymentReport.php';

$report = new PaymentReport();
$report->initData();
$report->createReport();
$report->printResult('csv');
