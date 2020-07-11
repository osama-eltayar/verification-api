<?php
namespace App\Mobile;

interface MobileInterface
{
    // send verification code
    public function SendVerification($mobileNumber);

    // check verification code
    public function checkVerification($mobileNumber, $code);
}
