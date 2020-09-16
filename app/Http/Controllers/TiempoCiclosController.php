<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiempoCiclosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $page_title = 'Configuración de tiempos de ciclo límite';
        $page_description = 'Descripción de la página ciclos';

        return view('pages.ciclos', compact('page_title', 'page_description'));
    }
}
