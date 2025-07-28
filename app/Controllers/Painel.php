<?php

namespace App\Controllers;

class Painel extends BaseController
{
    public function index()
    {
        if (!session()->get('logado')) {
            return redirect()->to('/login');
        }

        return view('painel');
    }
}
