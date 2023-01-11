<?php

namespace App\Models;

use CodeIgniter\BaseModel;
use CodeIgniter\Model;

class UserInformation extends Model
{
    protected $table = 'customer_information';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['user_id', 'firstname', 'lastname', 'birthday', 
    'bloodtype', 'number', 'address', 'city', 'state', 'zipcode', 'country'];

    function getby($id)
    {
        $builder = $this->db->table('customer_information');
        $builder->where('id', $id);
        $query = $builder->get();
        return $query->getRow();
    }
    
}
