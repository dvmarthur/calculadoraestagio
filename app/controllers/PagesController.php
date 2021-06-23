<?php

namespace App\Controllers;
use App\Core\App;

class PagesController {

    public function index()
    {   
         
        $resultado = App::get('database') ->selectAll('resultado');


        return view('calculadora2',compact('resultado'));       
    }
    public function create(){

        $parametros = [
            'name'=> $_POST['nome']
        ];
        App::get('database')->insert('resultado',$parametros);

        header('Location: /');

    }
    public function delete(){

        App::get('database')->delete('resultado',$_POST['id']);
        header('Location: /');
    }
        
}