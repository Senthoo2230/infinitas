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

    public function get_user_id($username) {
        $this->db->select('user_id'); // Assuming 'id' is the column name for user ID in your database table
        $this->db->where('username', $username);
        $query = $this->db->get('users'); // 'users' is the name of your database table

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->id;
        } else {
            return null; // User not found
        }
    }
                        
}


/* End of file User_model.php and path \application\models\User_model.php */
