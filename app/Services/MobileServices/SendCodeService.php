<?php
namespace App\Services\MobileServices;

use App\Mobile\MobileInterface;

class SendCodeService
{
    private $mobileProvider;

    public function __construct(MobileInterface $mobile)
    {
        $this->mobileProvider = $mobile;
    }
    public function make($mobileNumber)
    {
        $this->mobileProvider->SendVerification($mobileNumber);
    }
}
