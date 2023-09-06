<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; //colocar em uso a MODEL
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{

    public function gravarUsuario()
    {
        $user = new User();
        $user->name = "Administrador";
        $user->email = "admin@admin.com";
        $user->password = bcrypt("admin123");
        $user->save();
        return "Usuário criado com sucesso!";
    }


    public function logar(Request $request)//verificar se o usuario existe
    {
        /*if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            $request->session()->regenerate();
            return redirect()->intended('adm-page');
        }
        else
        {
            return "erro";
           // return redirect('cadastro');
        }*/


        //caso nao de certo
        if($request->email == 'administrador@gmail.com' && $request->password == "adm123")
        {
            //$request->session()->regenerate();
            return redirect()->intended('adm-page');
        }
        else
        {
            
            return redirect('login');
        }
    }
}
