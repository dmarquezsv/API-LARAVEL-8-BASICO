<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; # CLASES PARA CONSUMIR API

class HomeworksController extends Controller
{
    public function index(){
        $response = Http::get('https://jsonplaceholder.typicode.com/users');
        $usuarios = json_decode($response);
        //dd($usuarios);
        return view('welcome' , compact('usuarios'));
    }

    public function show_post($id){
        $response = http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        $posts = json_decode($response);
        //dd($posts);
        return view('show_post' , compact('posts'));
    }

    public function create_user(Request $request){
        
        $incoming = $request->all();
        //dd($incoming);
        $response = Http::post('https://jsonplaceholder.typicode.com/users/',[
                "name" => $incoming['name'],
                "username" => $incoming['username'],
                "email" => $incoming['email'],
                "phone" => $incoming['phone']
        ]);

        $responseuser = json_decode($response->getBody()->getContents());
        //MUESTRA ID DEL USUARIO CREADO
        dd($responseuser);
    }



}
