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
        try {
            $channel = $this->mobileProvider->SendVerification($userData);
            return response()->json([
               "message" => "$channel has been sent to you "
                ]) ;
        } catch (\Throwable $th) {
            return response()->json([
                "message"=>"sorry try again later "
            ], 500) ;
        }
    }
}
