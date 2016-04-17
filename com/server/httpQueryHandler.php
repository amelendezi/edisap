<?php
require_once '../loader.php';
use server\queries\QueryHandler as QueryHandler;
$queryName = filter_input(INPUT_GET, 'query', FILTER_SANITIZE_ENCODED);
$params = filter_input(INPUT_GET, 'params', FILTER_SANITIZE_ENCODED);
$handler = new QueryHandler();
$response = $handler->Handle($queryName, $params);
echo json_encode($response);