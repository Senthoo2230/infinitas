<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('Customer_model');
    }

    public function requests()
    {
        $data['title'] = "Requests";
        $data['requests'] = $this->Admin_model->requests();
        $data['main'] = "Dashboard";
        $data['sub'] = "Requests";
        $this->load->view('head',$data);
        $this->load->view('header',$data);
        $this->load->view('admin/requests',$data);
        $this->load->view('footer',$data);
    }

    public function all_packages()
    {
        $data['title'] = "Packages";
        $data['packages'] = $this->Admin_model->all_packages();
        $data['main'] = "Dashboard";
        $data['sub'] = "Packages";
        $this->load->view('head',$data);
        $this->load->view('header',$data);
        $this->load->view('admin/packages',$data);
        $this->load->view('footer',$data);
    }

    public function all_customers()
    {
        $data['title'] = "Customers";
        $data['customers'] = $this->Admin_model->all_customers();
        $data['main'] = "Dashboard";
        $data['sub'] = "Customers";
        $this->load->view('head',$data);
        $this->load->view('header',$data);
        $this->load->view('admin/customers',$data);
        $this->load->view('footer',$data);
    }

    public function req_approve($with_id){
        $currentTimestamp = date('Y-m-d H:i:s');
        $data = array(
            'status' => 1,
            'action_date' => $currentTimestamp,
        );
        $this->Admin_model->req_ok($with_id, $data);

        $with_data = $this->Admin_model->with_data($with_id);

        $history_data = array(
            'transaction' => 1,
            'customer_id' => $with_data->customer_id,
            'history_date' => $currentTimestamp,
            'amount' => $with_data->amount,
            'created_at' => $currentTimestamp,
        );

        $this->Customer_model->insert_history($history_data);

    }

    public function req_cancel($with_id){
        $currentTimestamp = date('Y-m-d H:i:s');
        $data = array(
            'status' => 3,
            'action_date' => $currentTimestamp,
        );
        $this->Admin_model->req_ok($with_id, $data);

    }
}

/* End of file Admin_controller.php and path \application\controllers\Admin_controller.php */
