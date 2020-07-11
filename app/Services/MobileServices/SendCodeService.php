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
    public function make(array $userData)
    {
        $channel = $this->mobileProvider->SendVerification($userData);
        return "$channel has been sent to you ";
    }
}
