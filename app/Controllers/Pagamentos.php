<?php

namespace App\Controllers;
use App\Models\PagamentoModel;

class Pagamentos extends BaseController
{
    public function novo()
    {
        return view('pagamentos/novo');
    }

    public function salvar()
    {
        $model = new PagamentoModel();

        $model->insert([
            'empresa' => $this->request->getPost('empresa'),
            'mes' => $this->request->getPost('mes'),
            'valor_pago' => $this->request->getPost('valor_pago'),
            'nf_fatura' => $this->request->getPost('nf_fatura'),
        ]);

        return redirect()->back()->with('sucesso', 'Pagamento inserido com sucesso!');
    }
}
