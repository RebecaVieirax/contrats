<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InstrumentoModel;

class Instrumentos extends BaseController
{
    public function novo()
    {
        return view('instrumentos/novo');
    }

    public function salvar()
    {
        $model = new \App\Models\InstrumentoModel();
    
        $model->insert([
            'numero_processo'     => $this->request->getPost('numero_processo'),
            'objetivo_contrato'   => $this->request->getPost('objetivo_contrato'),
            'crt_ata'             => $this->request->getPost('crt_ata'),
            'empresa_contratada'  => $this->request->getPost('empresa_contratada'),
            'cpf_cnpj'            => $this->request->getPost('cpf_cnpj'),
        ]);
    
        // Armazena a mensagem temporariamente
        session()->setFlashdata('sucesso', 'Instrumento cadastrado com sucesso!');
    
        // Recarrega o formulário com a mensagem
        return redirect()->to(base_url('instrumentos/novo'));
    }
    public function index()
    {
        $model = new \App\Models\InstrumentoModel();
        $data['instrumentos'] = $model->findAll();
    
        return view('instrumentos/index', $data);
    }
     
}
