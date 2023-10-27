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
    
    public function create_log($log_data){
        // Insert the user data into the database
        $this->db->insert('logs', $log_data);
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

    public function last_login($customer_id) {
        $this->db->order_by('log_time', 'DESC');
        $this->db->where('customer_id', $customer_id);
        $query = $this->db->get('logs'); // 'users' is the name of your database table
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->log_time;
        } else {
            return "Not Login"; // User not found
        }
    }

    public function customer_data($customer_id){
        $this->db->where('customer_id', $customer_id);
        $query = $this->db->get('customers');
        $row = $query->first_row();
        return $row;
    }

    public function customer_package($customer_id){
        $this->db->where('customer_id', $customer_id);
        $query = $this->db->get('customer_packages');
        $row = $query->first_row();
        return $row;
    }

    public function package_data($package_id){
        $this->db->where('package_id', $package_id);
        $query = $this->db->get('packages');
        $row = $query->first_row();
        return $row;
    }

    public function customers(){
        $this->db->order_by('created_at', 'DESC');
        $query = $this->db->get('customers');
        $result = $query->result();
        return $result;
    }

    public function all_customers(){
        $this->db->order_by('created_at', 'DESC');
        $query = $this->db->get('customers');
        $result = $query->result();
        return $result;
    }

    public function packages(){
        $this->db->order_by('package_id', 'ASC');
        $query = $this->db->get('packages');
        $result = $query->result();
        return $result;
    }

    public function approve_customer($data) {
        
        // Insert the user data into the database
        $this->db->insert('customer_packages', $data);
        // Check if the user was inserted successfully
        return $this->db->affected_rows() > 0;
    }

    public function update_data($cus_id, $new_data) {
        $this->db->where('customer_id', $cus_id); // Assuming 'id' is the column to identify the row to update
        $this->db->update('customers', $new_data);
    
        // Check if the update was successful
        if ($this->db->affected_rows() > 0) {
            return true; // Update successful
        } else {
            return false; // Update failed
        }
    }
                        
}


/* End of file Customer_model.php and path \application\models\Customer_model.php */
