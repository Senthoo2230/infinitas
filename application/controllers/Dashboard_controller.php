<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {   
        $this->load->view('head');
        $this->load->view('dashboard/dashboard');
        $this->load->view('footer');
    }
}

/* End of file Dashboard_controller.php and path \application\controllers\Dashboard_controller.php */
