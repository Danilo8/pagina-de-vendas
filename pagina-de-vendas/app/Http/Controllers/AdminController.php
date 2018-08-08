<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Função que retorna a view de LOGIN do Admin
     */
    public function login()
    {
        return view('admin.login');
    }
}
