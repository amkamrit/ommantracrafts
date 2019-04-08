<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;

class SocialAuthController extends Controller
{
	public function redirect($service) {
        return Socialite::driver ( $service )->redirect ();
    }

    public function callback($service) {
        $user = Socialite::with ( $service )->user ();
        return view ( 'home' )->withDetails ( $user )->withService ( $service );
    }
}