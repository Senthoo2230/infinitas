<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_model');
    }

    public function index()
    {   
        $data['customers'] = $this->Customer_model->customers();
        $this->load->view('head',$data);
        $this->load->view('dashboard/dashboard',$data);
        $this->load->view('footer',$data);
    }
}

/* End of file Dashboard_controller.php and path \application\controllers\Dashboard_controller.php */
