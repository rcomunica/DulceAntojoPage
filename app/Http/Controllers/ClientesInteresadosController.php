<?php

namespace App\Http\Controllers;

use App\Models\ClientesInteresados;
use App\Models\User;
use Illuminate\Http\Request;

class ClientesInteresadosController extends Controller
{
    public function create(Request $request)
    {

        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'ContactoNumero' => 'required',

        ]);

        $clientes = new ClientesInteresados();


        $clientes->nombre = $request->nombre;
        $clientes->apellido = $request->apellido;
        $clientes->numero = $request->ContactoNumero;
        $clientes->correo = $request->correo;


        $clientes->save();
        return redirect()->back()->with('status', "Se ha enviado tu peticion correctamente.. ¡Pronto te contactaremos!");
    }

    public function index()
    {
        $cliente = ClientesInteresados::all();
        $admin = User::all();

        return view('Admin/dashboard', compact('cliente', 'admin'));
    }

    public function success($id)
    {
        $cliente = ClientesInteresados::find($id);



        $cliente->status = "contactado";
        $cliente->save();
        return redirect()->back();
    }

    public function delete($id)
    {
        $i = ClientesInteresados::find($id);

        $i->delete();

        return redirect()->back()->with('status', "Se a eliminado el cliente exitoxamente!");
    }
}
