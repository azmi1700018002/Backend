<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;

class DanaSyariah_Model extends Model
{
    protected $table = 'dana_syariah';
    protected $primaryKey = 'dana_syariah_id';
    protected $allowedFields = [
        'nama_menu',
        'status',
        'tipe_id'
    ];
    protected $updatedField = 'updated_at';

    
}