<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Função que retorna a view INDEX
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Função que retorna a view de CONTATO
     */
    public function contato()
    {
        return view('contato');
    }
}
