<?php
/**
 * Created by PhpStorm.
 * User: WARL0CK
 * Date: 02/10/15
 * Time: 9:20 PM
 */

namespace App;

use Laravel\Socialite\Contracts\Factory as Socialite;

class AuthenticateUser
{
    private $socialite;

    public function __construct(Socialite $socialite)
    {
        $this->socialite= $socialite;
    }

    public function execute($hasCode)
    {
        if( ! $hasCode ) return $this->getAuthorizationFirst();

        $user= $this->socialite->driver('github')->user();

        dd($user);

    }

    public function getAuthorizationFirst()
    {
        return $this->socialite->driver('github')->redirect();
    }

}