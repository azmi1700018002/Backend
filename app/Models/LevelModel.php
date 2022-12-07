<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;

class LevelModel extends Model
{
    protected $table = 'dbo_level';
    protected $primaryKey = 'level_id';
    protected $allowedFields = [
        'level_nama', 
        'level_akses', 
      
    ];
    protected $updatedField = 'updated_at';

    public function getAllLevel(){
    //    $query = $this->db->query("SELECT * FROM dbo_konten WHERE konten_parent=2");
       
    //    return $query->getResult();
       $query = $this->db->table('dbo_level')
       ->orderBy('level_id', 'asc')
       ->get()->getResultArray();   

       return $query;
    }
    public function findLevelById($id)
    {
        $dbo_level = $this
            ->asArray()
            ->where(['level_id' => $id])
            ->first();

        if (!$dbo_level) throw new Exception('Could not find level for specified ID');

        return $dbo_level;
    }

    
}