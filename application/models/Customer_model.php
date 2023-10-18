<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Customer_model extends CI_Model 
{
    public function register_customer($customer_data) {
        
        // Insert the user data into the database
        $this->db->insert('customers', $customer_data);
        // Check if the user was inserted successfully
        return $this->db->affected_rows() > 0;
    }        
    
    public function getHashedPasswordFromDB($username) {
        $query = $this->db->select('password')->from('customers')->where('username', $username)->get();
        $result = $query->row();
        if ($result) {
            return $result->password;
        }
        return false;
    }

    public function get_customer_id($username) {
        $this->db->select('customer_id'); // Assuming 'id' is the column name for user ID in your database table
        $this->db->where('username', $username);
        $query = $this->db->get('customers'); // 'users' is the name of your database table

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->customer_id;
        } else {
            return null; // User not found
        }
    }

    public function customer_data($customer_id){
        $this->db->where('customer_id', $customer_id);
        $query = $this->db->get('customers');
        $row = $query->first_row();
        return $row;
    }
                        
}


/* End of file Customer_model.php and path \application\models\Customer_model.php */
