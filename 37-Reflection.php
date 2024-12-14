<?php 
require_once "exception/1-ValidationException.php";
require_once "data/19-LoginRequest.php";
require_once "helper/3-ValidationUtil.php";

$request = new LoginRequest();
$request->username = "eko";
$request->password = "rahasia";

// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "Eko";
$register->address = "Subang";
$register->email = "eko@gmail.com";

ValidationUtil::validateReflection($register);

// ValidationUtil::validate($register);
?>