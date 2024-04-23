<?php
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/login-microsoft', function () {
  return Socialite::driver('microsoft-graph')->redirect();
});

Route::get('/redirect', function () {
  $user = Socialite::driver('microsoft-graph')->user();
  return json_encode($user);
});