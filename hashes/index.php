<?php
namespace Hashes;
require "hashes.php";
use Hashes\MyHash;

$password ="super_secret_password";

$hashed_password = MyHash::generateHash($password);
//$password="super_updated_password";

if(MyHash::validateHash($password,$hashed_password)){
    echo "Welcome to the real world Neo"."\n";
}else{
    echo "Keep following the white rabbit!\n";
}
