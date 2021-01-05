<?php
namespace Hashes;

class MyHash{
    private static $algo = PASSWORD_BCRYPT;
    public static function generateHash(string $password, $algo=null){
        if($algo){ self::$algo = $algo;}

        return password_hash($password, self::$algo);
    }

    public static function validateHash($password,$hashed_password)
    {
        return password_verify($password,$hashed_password);
    }
}
