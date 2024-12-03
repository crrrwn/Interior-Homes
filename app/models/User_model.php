<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {
    public function getusers()
    {
        return $this->db->table('users')->get_all();
    }

    public function addUser($data)
    {
        // Ensure only valid columns are being inserted
        $validColumns = ['fullname', 'email', 'password', 'role', 'compAdd', 'number'];
        $filteredData = array_intersect_key($data, array_flip($validColumns));
        
        return $this->db->table('users')->insert($filteredData);
    }

    public function getEmail($email)
    {
        return $this->db->table('users')->where('email', $email)->get();
    }

    public function getUserById($userId)
    {
        return $this->db->table('users')->where('id', $userId)->get();
    }

    public function getcart($user_id)
    {
        return $this->db->table('cart')->where('user_id', $user_id)->get_all();
    }

    // Updated methods for role-based registration and login

    public function register_user($data)
    {
        // This method can use the existing addUser method
        return $this->addUser($data);
    }

    public function login_user($email, $password)
    {
        $user = $this->getEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return false;
    }

    public function get_user_role($user_id)
    {
        $user = $this->getUserById($user_id);

        return $user ? $user['role'] : null;
    }

    // New method to update user profile
    public function updateUser($userId, $data)
    {
        $validColumns = ['fullname', 'email', 'compAdd', 'number'];
        $filteredData = array_intersect_key($data, array_flip($validColumns));
        
        return $this->db->table('users')->where('id', $userId)->update($filteredData);
    }

    // New method to change password
    public function changePassword($userId, $newPassword)
    {
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        return $this->db->table('users')->where('id', $userId)->update(['password' => $hashedPassword]);
    }
}
?>

