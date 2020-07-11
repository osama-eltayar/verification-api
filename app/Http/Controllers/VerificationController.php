<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MobileServices\SendCodeService;

class VerificationController extends Controller
{
    public function verify(Request $request, SendCodeService $sendCode)
    {
        $request= $request->only(['mobile','email']);
        $sendCode->make($request['mobile']);
        return response()->json("message sent to your phone");
    }
}
