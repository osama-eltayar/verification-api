<?php
namespace App\Mobile;

interface MobileInterface
{
    // send verification code
    public function SendVerification(array $userData);

    // check verification code
    public function checkVerification($reciever, $code);
}
