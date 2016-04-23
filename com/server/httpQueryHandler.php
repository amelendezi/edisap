<?php
require_once '../loader.php';
use server\queries\QueryHandler as QueryHandler;
$queryName = filter_input(INPUT_POST, 'query', FILTER_SANITIZE_ENCODED);
$params = $_POST['params']; // Issue #1: this should be done differently.
$handler = new QueryHandler();
$response = $handler->Handle($queryName, $params);
echo json_encode($response);