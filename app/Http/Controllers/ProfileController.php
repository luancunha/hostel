<?php

namespace App\Http\Controllers;

use PDO;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $user = Auth::user()->tipo;
        if ($user == "admin"){
            return view('profile.edit');
        }
        else
            return view('hos.editar_perfil');
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        $tipo = Auth::user()->tipo;
        if ($tipo == "admin"){
            auth()->user()->update($request->all());

            return back()->withStatus(__('Perfil atualizado com sucesso.'));
        }
        else {
            auth()->user()->update($request->all());

            $email = auth()->user()->email;
            $nome = auth()->user()->name;

            DB::update("UPDATE hospedes set nome = '$nome' where email = '$email';");

            return back()->withStatus(__('Perfil atualizado com sucesso.'));
        }
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withStatusPassword(__('Senha atualizada com sucesso.'));
    }
}
