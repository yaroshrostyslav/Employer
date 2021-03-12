<?php

namespace app\models;

use app\core\Model;
use PDO;

class UserModel extends Model {
    protected $table = 'users';

    public function checkUser($login){
        $stm = $this->db->pdo->prepare("SELECT * FROM $this->table WHERE email = :login OR phone = :login ");
        $stm->bindParam(":login", $login, PDO::PARAM_STR);
        $stm->execute();
        $res = $stm->fetch(PDO::FETCH_ASSOC);
        return $res;
    }

    public function isAuth(){
        if (isset($_SESSION['auth']) && $_SESSION['auth'] == true){
            return true;
        }
        return false;
    }
}