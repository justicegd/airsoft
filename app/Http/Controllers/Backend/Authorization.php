<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Services\Backend\AuthorizationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class Authorization extends Controller
{
    function login(Request $request)
    {
        $account = $request->input('account');
        $password = $request->input('password');
        /** @var AuthorizationService $authorizationService */
        $authorizationService = App::make(AuthorizationService::class);
        $authorizationService->login($account ,$password);

        return redirect()->route('backend-home');

    }

    function logout()
    {
        session()->forget("loginStatus");
        return redirect()->route('loginPage');
    }
}
