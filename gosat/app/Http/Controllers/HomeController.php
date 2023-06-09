<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $cpf = $request->input('cpf');
        session(['cpf' => $cpf]);
        return redirect('/simulacao/' . $cpf);
    }
}
