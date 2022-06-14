<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
     public function index()
     {
         $clientes = Clientes::all();
         //dd($clientes);
         return view('clientes');
     }
}
