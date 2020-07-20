<?php

namespace App\Models;

use PDO;
use Main\Model;

class User extends Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public function checkLogin(string $email, string $pass)
    {
        $stmt = $this->db->prepare('SELECT id, name FROM users where email = ? and password = ?');

        $stmt->execute([$email, $pass]);
 
        return $stmt->fetch();
    }
}
