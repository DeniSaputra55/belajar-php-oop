<?php 
require_once "exception/1-ValidationException.php";
require_once "data/19-LoginRequest.php";
require_once "helper/2-Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "  ";
$loginRequest->password = "  ";

//multiple try catch
try {
    validateLoginRequest($loginRequest);
    echo "VALID" . PHP_EOL;
} catch (ValidationException | Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;

    //sebagai string
    var_dump($exception->getTrace());
    //dump trace
    echo $exception->getTraceAsString() . PHP_EOL;
} finally {
    echo "ERROR ATAU ENGGAK, AKAN DIEKSEKUSI" . PHP_EOL;
}

?>