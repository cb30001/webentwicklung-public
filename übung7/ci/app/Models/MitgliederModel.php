<?php
namespace App\Models;
use CodeIgniter\Model;
class MitgliederModel extends Model
{

    public function __construct(){
        $this->load->database();
    }

    public function getData () {
        $result = $this->db->query('select * from mitglieder');
        return $result->getResultArray();
}
}
?>