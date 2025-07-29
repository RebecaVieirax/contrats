<?php

namespace App\Controllers;

use App\Models\DominioModel;

class Dominios extends BaseController
{
    public function novo()
    {
        return view('dominios/novo');
    }

    public function salvar()
    {
        $model = new \App\Models\DominioModel();
    
        $model->insert([
            'dominio' => $this->request->getPost('dominio'),
            'data_expira' => $this->request->getPost('data_expira')
        ]);
    
        // Salva a mensagem na sessão como flash
        session()->setFlashdata('sucesso', 'Domínio cadastrado com sucesso!');
    
        // Recarrega a própria página (sem redirecionar para listagem)
        return redirect()->to(base_url('dominios/novo'));
    }
    
    
    public function index()
{
    $model = new \App\Models\DominioModel();

    $data['dominios'] = $model->findAll();
    $data['sucesso'] = session()->getFlashdata('sucesso');

    return view('dominios/index', $data);
}

}
