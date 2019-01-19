<?php

namespace App\Http\Services\Backend;


class AuthorizationService
{

    function checkLogin($request){
        $loginStatus = $request->session()->get('loginStatus');
        $result = ($loginStatus === true) ? true : false;
        return $result ;

    }

    public function login($pAccount,$pPassword)
    {
        $account = env('ACCOUNT',false);
        $password= env('PASSWORD',false);
        if($pAccount === $account && $pPassword=== $password && $account !== false && $password!==false){
            session(['loginStatus' => true]);
        }

    }


}
