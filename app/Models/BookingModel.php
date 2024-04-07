<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $DBGroup = 'default';
    protected $table            = 'booking2';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['email','name','phone','date','time','people','message'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

public function booking_update($id)
{
    $sql = 'UPDATE booking
            SET updated_at = CURRENT_TIMESTAMP()
            WHERE id = ?';
    $query = $this->db->query($sql, [$id]);
}
// public function booking_update($id)
//     {
//         $builder = $this->db->table($this->table);
//         $data = [
//             'updated_at' => date('Y-m-d H:i:s')
//         ];
//         $builder->where('id', $id);
//         $builder->update($data);
//     }
public function getInsertID()
{
    return $this->db->insertID();
}
}
