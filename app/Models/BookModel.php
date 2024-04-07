<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    var $table='books';
    // protected $table            = 'books';
    // protected $primaryKey       = 'id';
    // protected $useAutoIncrement = true;
    // protected $returnType       = 'array';
    // protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    // protected $allowedFields    = [];

    // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $builder = $db->table('books');
    }
    public function get_all_books(){
        $query=$this->db->query('select * from books');
        return $query->getResult();
    }
    public function get_by_id($id){
        $sql='select * from books where book_id ='. $id;
        $query=$this->db->query($sql);
        return $query->getRow();
    }
    public function book_add($data){
        $query=$this->db->table($this->table)->insert($data);
        return $this->db->insertID();
    }
    public function book_update($where, $data){
        $this->db->table($this->table)->update($data, $where);
        return $this->db->affectedRows();
    }
    public function book_delete($id){
        $this->db->table($this->table)->delete(array('book_id'=> $id));
    }
}
