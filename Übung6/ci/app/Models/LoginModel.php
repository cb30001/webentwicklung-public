<?php
namespace App\Models;
use CodeIgniter\Model;
class LoginModel extends Model
{

    public function login() {
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->select('Password');
        $this->mitglieder->where('mitglieder.Username', $_POST['Username']);
        $result = $this->mitglieder->get();
        return $result->getRowArray();
    }
}
?>