<?php

namespace app\models;

use app\core\Model;
use PDO;

class EmployeeModel extends Model{
    protected $table = 'employeer';

    public function getAll(){
        $stm = $this->db->pdo->prepare("SELECT * FROM $this->table ORDER BY id DESC ");
        $stm->execute();
        return $stm;
    }

    public function create($data){
        $fName = $data['fName'];
        $sName = $data['sName'];
        $pName = $data['pName'];
        $stm = $this->db->pdo->prepare("INSERT INTO $this->table (fname, sname, pname) VALUES ($fName, $sName, $pName) ");
        $stm->execute();
        return $stm;
    }

    public function find($data){
        $value = $_POST['value'];
        $stm = $this->db->pdo->prepare("SELECT * FROM $this->table WHERE fname LIKE concat('%',:value,'%') OR sname LIKE concat('%',:value,'%') OR pname LIKE concat('%',:value,'%') ");
        $stm->bindParam(":value", $value, PDO::PARAM_STR);
        $stm->execute();
        foreach ($stm as $key => $value) {
            $data[] = $value;
        }

        if ($stm->rowCount() == 0){
            $data = [];
        }
        return ['data' => $data, 'count' => $stm->rowCount()];
    }
}