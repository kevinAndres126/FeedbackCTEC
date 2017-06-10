<?php

namespace CTEC\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function obtenerInstalacion(){
        return view('instalaciones');
    }
    public function iniciarSesion(Request $request)
    {
        /*
        $this->validate($request, [
            'nombre_usuario' => 'required',
            'contraseña' => 'required'
        ]);
        */


        if (Auth::attempt(['nombre_usuario' => $request['nombre_usuario'], 'contraseña' => $request['contraseña']])) {
            return redirect()->route('instalaciones');
        }
        else{
            return redirect()->back();
        }
    }
}
