<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['user_name','user_password'];

    public function getData($kunci)
    {
        $sql = "SELECT * FROM ".$this->table." WHERE user_name='$kunci'";
        $query = $this->db->query($sql);
        $results = $query->getRowArray();
        return $results;
    }
}
