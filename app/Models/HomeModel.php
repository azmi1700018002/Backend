<?php
 
namespace App\Models;

use CodeIgniter\Model;
use Exception;

class HomeModel extends Model
{ 
    protected $table = 'dbo_konten';
    protected $primaryKey = 'konten_id';
    protected $allowedFields = [
        'konten_parent',
        'konten_menu',
        'konten_judul',
        'konten_subjudul',
        'konten_gambar',
        'file_path',
        'konten_deskripsi', 
        'konten_url',  
    ];
    
    protected $updatedField = 'updated_at';

    public function getAllListHome(){
        $query = $this->db->table('dbo_konten')
        ->where('konten_parent = 93') 
        ->limit(3)      
        ->orderBy('konten_id', 'desc')
        ->get()->getResultArray(); 
        return $query;
     }

     public function getHome($id)
     {
         $dbo_konten = $this
             ->asArray()
             ->where(['konten_id' => $id])
             ->first();
         if (!$dbo_konten) throw new Exception('Could not find client for specified ID');
 
         return $dbo_konten;
     }
 
    
}