<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class LoginController extends Controller
{
    public function Login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))){
            return redirect("/");
        }
    return back()->with('erreur', 'Les identifiants renseignés sont incorrecte');
    }
    public function Deconnexion()
    {   
        Auth::logout();
        return redirect()->route('login');
    }
    public function home()
    {
        $ademo = User::where('email', 'admin@admin.com')->first();
        if (!$ademo) {
            User::create(['nom'=>'admin', "prenom"=>"admin", 'email'=>'admin@admin.com', 'password'=> bcrypt('adminpass')]);
        }
        return view('welcome');
        // User::create(['nom'=>'admin', "prenom"=>"admin", 'email'=>'admin@admin.com', 'email_verified_at'=> now(),    'password'=> bcrypt('adminpass')]);
    }
}
