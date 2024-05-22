<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Gestion;
use App\Models\User;
use App\Models\Docente;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function inicio(){

        return view('user.home');
    }

    public function login(Request $request){
        $request->validate([
            'username' => 'required|email|string',
            'password' => 'required|string',
        ]);

        // Obtener las credenciales del request
        $credentials = $request->only('username',
        'password');

        $user = User::where('email',$request->username)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                return view('user.principal');
            }else{
                return back()->with('error','la contraseña es incorrecta');
            }
        }else{
            return back()->with('error','el correo no existe');
        }
    }

}
