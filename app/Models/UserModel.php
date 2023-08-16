<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    function getData($id = null)
    {
        if (!empty($id)) {
            $query = "SELECT * FROM users WHERE id=" . $id;
        } else {
            $query = "SELECT * FROM users";
        }
        $result = $this->db->query($query);
        return $result->getResultArray();
    }

    function addData($data)
    {
        $query = "INSERT INTO `users`(`name`, `email`, `age`, `number`) VALUES ('" . $data['name'] . "','" . $data['email'] . "','" . $data['age'] . "','" . $data['number'] . "')";
        return $this->db->query($query);
    }
}
