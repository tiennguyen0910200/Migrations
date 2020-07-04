<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
	function index(){
		return view("login");
	}

	function login(Request $request)
	{
		$username = $request->username;
		$password = $request->password;

		if (Auth::attempt(["username" => $username, "password" => $password]))
		 {
			$user = Auth::user();
			if ($user->username == "vit") 
			{
				return redirect()->route('dashboard');
			}else
			{
				return redirect()->route('home');
			}
		} 
	}
}
