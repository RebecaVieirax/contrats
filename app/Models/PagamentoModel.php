<?php

namespace App\Models;

use CodeIgniter\Model;

class PagamentoModel extends Model
{
    protected $table = 'pagamentos';
    protected $allowedFields = ['empresa', 'mes', 'valor_pago', 'nf_fatura'];
    public $timestamps = false;
}
