<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Admin_model extends CI_Model 
{
    public function requests(){
        $this->db->where('status', 0);
        $this->db->order_by('created_at', 'DESC');
        $query = $this->db->get('withdrawal');
        $result = $query->result();
        return $result;
    }      
    
    public function with_data($with_id){
        $this->db->where('withdrawal_id', $with_id);
        $query = $this->db->get('withdrawal');
        $row = $query->first_row();
        return $row;
    }
    
    public function req_ok($with_id, $data) {
        $this->db->where('withdrawal_id', $with_id);
        $this->db->update('withdrawal', $data);
    }

    public function req_count(){
        $this->db->where('status', 0);
        $query = $this->db->get('withdrawal');
        return $query->num_rows();
    }
                        
}


/* End of file Admin_model.php and path \application\models\Admin_model.php */
