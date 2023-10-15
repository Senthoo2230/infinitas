<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class User_model extends CI_Model 
{
    public function register_user($data) {
        // Hash the password before storing it in the database
        $hashed_password = password_hash($data['password'], PASSWORD_BCRYPT);

        // Prepare data for insertion
        $user_data = array(
            'username' => $data['username'],
            'password' => $hashed_password
        );

        // Insert the user data into the database
        $this->db->insert('users', $user_data);

        // Check if the user was inserted successfully
        return $this->db->affected_rows() > 0;
    }   
    
    public function getHashedPasswordFromDB($username) {
        $query = $this->db->select('password')->from('users')->where('username', $username)->get();
        $result = $query->row();
        if ($result) {
            return $result->password;
        }
        return false;
    }
                        
}


/* End of file User_model.php and path \application\models\User_model.php */
