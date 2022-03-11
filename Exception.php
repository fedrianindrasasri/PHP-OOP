<?php

require_once "exception/Exception.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "fedrian";
$loginRequest->password = "fedrian";

try {
    validateLoginRequest($loginRequest);
} catch (ValidationException | Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
} finally {
    echo "Error tidak error akan dipanggil" . PHP_EOL;
}
