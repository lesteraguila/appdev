<?php

namespace App\Models;

use CodeIgniter\BaseModel;
use CodeIgniter\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['user_id', 'firstname', 'lastname', 'treatment', 'number', 'status', 'datetime'];

    function getAll()
    {
        $session = session('loggedCustomer');
        $builder = $this->db->table('customer');   
        $builder->select('booking.id, name, email, firstname, lastname, treatment, number, status, datetime');
        $builder->join('booking', 'customer.id = booking.user_id', 'inner');
        $query = $builder->get()->getResult();
        return $query;
    }

    function getby($id)
    {
        $builder = $this->db->table('booking');
        $builder->where('id', $id);
        $query = $builder->get();
        return $query->getRow();
    }

    function getDataSolo()
    {
        $session = session('loggedCustomer');
        $builder = $this->db->table('customer');   
        $builder->select('booking.id, treatment, status, datetime')->where('booking.user_id', $session);
        $builder->join('booking', 'customer.id = booking.user_id', 'inner');
        $query = $builder->get()->getResult();
        return $query;
    }
}