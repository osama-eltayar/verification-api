<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Services\MobileServices\SendCodeService;

class VerificationController extends Controller
{
    public function verify(UserRequest $request, SendCodeService $sendCodeService)
    {
        $message = $sendCodeService->make($request->only(['mobile','email']));
        return response()->json($message);
    }
}
