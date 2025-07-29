<?php

namespace App\Models;

use CodeIgniter\Model;

class ContratoModel extends Model
{
    protected $table = 'contratos';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'processo_administrativo',
        'nome_empresa',
        'servico',
        'gestor_contrato',
        'fiscal',
        'fiscal_substituto',
        'vigencia',
        'informacoes',
        'renovavel',
        'status',
        'numero_sei'
    ];

    protected $useTimestamps = false;
}
