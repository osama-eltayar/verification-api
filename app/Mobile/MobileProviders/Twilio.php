<?php
namespace App\Mobile\MobileProviders;

use Twilio\Rest\Client;
use App\Mobile\MobileInterface;

class Twilio implements MobileInterface
{
    private $twilio ;
    private $twilioVerifySid;

    public function __construct()
    {
        $this->twilio = $this->getTwilioClient();
        $this->twilioVerifySid = $this->getServiceId();
    }
    
    public function SendVerification($mobileNumber)
    {
        $this->twilio->verify->v2->services($this->twilioVerifySid)
            ->verifications
            ->create($mobileNumber, "sms");
    }

    private function getTwilioClient()
    {
        $token = config('twilio.TWILIO_AUTH_TOKEN');
        $twilio_sid = config('twilio.TWILIO_SID');
        return new Client($twilio_sid, $token);
    }

    private function getServiceId()
    {
        return config('twilio.TWILIO_VERIFY_SID');
    }

    public function checkVerification($mobileNumber, $code)
    {
    }
}
