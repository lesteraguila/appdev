<?php

namespace App\Models;

use CodeIgniter\BaseModel;
use CodeIgniter\Model;

class UserData extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['name', 'email', 'password', 'repassword', 
    'active','recovery_hash','recovery_expires','photo', 'created_at'];

    function getby($id)
    {
        $builder = $this->db->where('id', $id);
        $query = $builder->get();
        return $query->getRow();
    }

}


