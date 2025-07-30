<?php

namespace App\Models;

use CodeIgniter\Model;

class InstrumentoModel extends Model
{
    protected $table = 'instrumentos';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'numero_processo',
        'objetivo_contrato',
        'crt_ata',
        'empresa_contratada',
        'cpf_cnpj'
    ];
    protected $useTimestamps = false; // ← desativa os campos created_at e updated_at
}
