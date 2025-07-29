<?php

namespace App\Models;

use CodeIgniter\Model;

class DominioModel extends Model
{
    protected $table = 'dominios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['dominio', 'data_expira'];
    protected $useTimestamps = false;
}
