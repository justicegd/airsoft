<?php

namespace App\Http\Middleware\Backend;

use App\Http\Services\Backend\AuthorizationService;
use Illuminate\Support\Facades\App;
use Closure;

class CheckLogin
{
    public function handle($request, Closure $next)
    {
        /** @var AuthorizationService  $authorizationService */
        $authorizationService = App::make(AuthorizationService::class);
        $loginStatus = $authorizationService->checkLogin($request);
        if($loginStatus === false){
            return redirect()->route('loginPage');
        }

        return $next($request);
    }
}
