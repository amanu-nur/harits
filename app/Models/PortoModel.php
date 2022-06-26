<?php 

namespace App\Models;
use CodeIgniter\Model;

class PortoModel extends Model{
   public function getEdu()
    {
          return $this->db->table('edu')
                         ->get()->getResultArray();   
    }
   public function getOrga()
    {
          return $this->db->table('organisasi')
                         ->get()->getResultArray();   
    }
}