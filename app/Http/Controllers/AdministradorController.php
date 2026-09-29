<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{

    public function listar(){

        return "Aquí va el Select";
    }

    public function vistaFormulario(){
        return "Aquí el formulario de registro";
    }

    public function registrar(Request $request){
        $admin = new Administrador();
        $admin->nombre = $request->nombre;
        
        $admin->save(); 

        return "ADMINISTRADOR REGISTRADO";
    }

    public function vistaEdicion(){
        // return "Aquí va el formulario para editar";
        return view("/administradores/edicion");
    }

    public function actualizar(){
        return "Aquí va el Update";
    }

    public function vistaMostrar(){
        // return "Aquí va la vista de mostrar";
        return view("/administradores/mostrar");
    }

    public function borrar(){
        return "Aquí va el Delete";
    }

}
