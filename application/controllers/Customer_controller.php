<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function signup()
    {
        $this->load->view('head');
        $this->load->view('customer/register');
        $this->load->view('footer');
    }

    public function customer_register(){
        // Set validation rules
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_pwd', 'Repeat Password', 'required|matches[password]');
    }
}

/* End of file Customer_controller.php and path \application\controllers\Customer_controller.php */
