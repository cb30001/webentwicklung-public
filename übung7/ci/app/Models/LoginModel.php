<?php
namespace App\Models;
use CodeIgniter\Model;
class LoginModel extends Model
{
    public function __construct(){
        $this->load->database();
    }

    public function getData () {
        $result = $this->db->query('select Username, Password from mitglieder');
        return $result->getResultArray();
    }
}
?>