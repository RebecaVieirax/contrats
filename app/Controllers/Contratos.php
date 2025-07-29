<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContratoModel;

class Contratos extends BaseController
{public function index()
    {
        $model = new \App\Models\ContratoModel();
        $busca = $this->request->getGet('busca');
    
        if ($busca) {
            $model->groupStart()
                  ->like('processo_administrativo', $busca)
                  ->orLike('nome_empresa', $busca)
                  ->orLike('servico', $busca)
                  ->orLike('gestor_contrato', $busca)
                  ->orLike('fiscal', $busca)
                  ->orLike('fiscal_substituto', $busca)
                  ->orLike('vigencia', $busca)
                  ->groupEnd();
        }
    
        $data['contratos'] = $model->where('status', 'ativo')->findAll();
        $data['busca'] = $busca;
    
        return view('contratos/index', $data);
    }
    

    public function salvar()
    {
        $model = new \App\Models\ContratoModel();
    
        $model->insert([
            'processo_administrativo' => $this->request->getPost('processo_administrativo'),
            'nome_empresa'            => $this->request->getPost('nome_empresa'),
            'servico'                 => $this->request->getPost('servico'),
            'gestor_contrato'         => $this->request->getPost('gestor_contrato'),
            'fiscal'                  => $this->request->getPost('fiscal'),
            'fiscal_substituto'       => $this->request->getPost('fiscal_substituto'),
            'vigencia'                => $this->request->getPost('vigencia'),
            'informacoes'             => $this->request->getPost('informacoes'),
            'status'                  => 'ativo'
        ]);
    
        // Carrega a view do formulário novamente com mensagem
        return view('contratos/novo', [
            'sucesso' => 'Licitação cadastrada com sucesso!'
        ]);
    }
    public function novo()
    {
        return view('contratos/novo');
    }
    

}
