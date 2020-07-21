<?php

namespace App\Models;

use Main\Model;

class User extends Model
{

    /**
     * Check user data
     *
     * @return array
     */
    public function checkLogin(string $email, string $pass)
    {
        $stmt = $this->db->prepare('SELECT id, name FROM users where email = ? and password = ?');

        $stmt->execute([$email, md5($pass)]);

        return $stmt->fetch();
    }

    /**
     * Regsiter User
     *
     * @return array
     */
    public function registerUser(string $email, string $pass, string $name)
    {
        $stmt = $this->db->prepare('INSERT INTO users (name, password, email) VALUES (?, ?, ?)');
 
        return $stmt->execute([$name, md5($pass), $email]);
    }
}
