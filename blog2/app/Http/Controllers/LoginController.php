<?php

//namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//class LoginController extends Controller
//{
    //
   // public function loginForm() { 
     //   return view('auth.login'); 
    //} 
   // public function logout() 
   // { 
   ///     Auth::logout(); // ... Renderizar la vista deseada }
   // }
//}



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm() { 
        return view('auth.login'); 
    } 

   public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        // Redirigir a la pàgina d'inici real
        return redirect()->route('inicio');
    }

    return back()->withErrors([
        'email' => 'Les credencials no són correctes',
    ]);
}

    public function logout(Request $request) 
    { 
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
