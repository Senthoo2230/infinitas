<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_model');
    }

    public function signup()
    {
        $data['title'] = "Customer Signup";
        $this->load->view('head',$data);
        $this->load->view('customer/register',$data);
        $this->load->view('footer',$data);
    }

    public function login()
    {
        if ($this->session->userdata('customer_logged')) {
            redirect('customer_dashboard');
        } 
        $data['title'] = "Customer Login";
        $this->load->view('head',$data);
        $this->load->view('customer/login',$data);
        $this->load->view('footer',$data);
    }

    public function dashboard()
    {   
        if ($this->session->userdata('customer_logged')) {
            $customer_id = $this->session->userdata('customer_id');
        } 
        $data['customer_data'] = $customer_data = $this->Customer_model->customer_data($customer_id);
        $package_id = $this->Customer_model->customer_package($customer_id)->package_id;
        $package_data = $this->Customer_model->package_data($package_id);

        $data['package_data'] = $package_data;

        $data['ref_count'] = $this->Customer_model->refferal_count($customer_id);

        $data['title'] = "Dashboard";
        $data['main'] = "Customer";
        $data['sub'] = "Dashboard";
        $this->load->view('head',$data);
        $this->load->view('customer/header',$data);
        $this->load->view('customer/dashboard',$data);
        $this->load->view('footer',$data);
    }

    public function customer_register(){
        // Set validation rules
        $this->form_validation->set_rules('fname', 'Firstname', 'required');
        $this->form_validation->set_rules('lname', 'Lastname', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required|numeric|max_length[10]|is_unique[customers.mobile]',
        array(
            'is_unique' => 'Mobile number is already registered!'
        ));
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[customers.email]',
        array(
            'is_unique' => 'Email is already registered!'
        ));
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[customers.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_pwd', 'Repeat Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE)
        {
                $this->signup();
        }
        else{
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            $mobile = $this->input->post('mobile');
            $email = $this->input->post('email');
            $address = $this->input->post('address');
            $ref_id = $this->input->post('ref_id');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            $currentTimestamp = date('Y-m-d H:i:s');

            $customer_data = array(
                'firstname' => $fname,
                'lastname' => $lname,
                'mobile' => $mobile,
                'email' => $email,
                'address' => $address,
                'ref_id' => $ref_id,
                'username' => $username,
                'password' => $hashed_password,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            );

            // Call the register_user method of the User_model
            if ($this->Customer_model->register_customer($customer_data)) {
                // Registration successful, redirect to a success page
                $customer_id = $this->Customer_model->get_customer_id($username);
                // Start Email
                $this->email->from('senthoo19828@gamil.com', 'Senthuran');
                $this->email->to($email);

                $this->email->subject('Account Confirmation');
                $this->email->message('Click the following link to confirm your account: ' . base_url('registration/confirm/'.$customer_id));
                //End email
                $this->session->set_flashdata('success', 'The registration was successful!');
                redirect('customer_login');
            } else {
                // Registration failed, show an error message
                $this->session->set_flashdata('error', 'Something went wrong!');
                redirect('customer_signup');
            }
        }
    }

    public function signin(){
        $currentTimestamp = date('Y-m-d H:i:s');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
                $this->login();
        }
        else
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            // Retrieve hashed password from the database based on the username
            $hashed_password_from_db = $this->Customer_model->getHashedPasswordFromDB($username);
            if (password_verify($password, $hashed_password_from_db)) {
                // Passwords match, user is authenticated, proceed with login logic
                $customer_id = $this->Customer_model->get_customer_id($username);

                $cus_data = $this->Customer_model->customer_data($customer_id);
                $approved = $cus_data->approved;

                if ($approved == 1) {
                    // Set session data
                    $data = array(
                        'customer_id' => $customer_id,
                        'customer_logged' => true,
                    );

                    $this->session->set_userdata($data);
                    redirect('customer_dashboard');
                    }
                else{
                    // Passwords don't match, show error message or redirect back to login page
                    $this->session->set_flashdata('error', 'You are not get aprroval!');
                    redirect('customer_login');
                }
                
            } else {
                // Passwords don't match, show error message or redirect back to login page
                $this->session->set_flashdata('error', 'Invalid username or password!');
                redirect('customer_login');
            }
        }
    }

    public function customer_logout() {
        // $currentTimestamp = date('Y-m-d H:i:s');
        // // Create log
        // $log_data = array(
        //     'customer_id' => $this->session->customer_id,
        //     'log_time' => $currentTimestamp,
        //     'type' => 0
        // );
        // $this->Customer_model->create_log($log_data);
        $this->session->sess_destroy(); // Destroy all session data
        redirect('customer_login'); // Redirect to the login page or any other desired page
    }

    public function all_customers(){
        $data['title'] = "Customers";
        $data['main'] = "Customer";
        $data['sub'] = "All";
        $data['customers'] = $this->Customer_model->all_customers();
        $this->load->view('head',$data);
        $this->load->view('header',$data);
        $this->load->view('customer/all_customers',$data);
        $this->load->view('footer',$data);
    }

    public function approval($customer_id){
        $data['title'] = "Approval";
        $data['customer_id'] = $customer_id;
        $data['main'] = "Customer";
        $data['sub'] = "Approval";

        $data['packages'] = $this->Customer_model->packages();
        $this->load->view('head',$data);
        $this->load->view('header',$data);
        $this->load->view('customer/approval',$data);
        $this->load->view('footer',$data);
    }

    public function report(){
        $data['title'] = "Report";
        $data['main'] = "Customer";
        $data['sub'] = "Report";

        $customer_id = $this->session->customer_id;
        $data['customer_id'] = $customer_id;

        $customer_package = $this->Customer_model->customer_package($customer_id);
        $data['customer_package'] = $customer_package;

        $package_id = $customer_package->package_id;
        $data['package_id'] = $package_id;

        $package_data = $this->Customer_model->package_data($package_id);
        $data['package_data'] = $package_data;

        //$data['packages'] = $this->Customer_model->packages();
        $this->load->view('head',$data);
        $this->load->view('customer/header',$data);
        $this->load->view('customer/report',$data);
        $this->load->view('footer',$data);
    }

    public function history(){
        $data['title'] = "History";
        $data['main'] = "Customer";
        $data['sub'] = "History";

        $customer_id = $this->session->customer_id;
        $data['customer_id'] = $customer_id;

        $customer_package = $this->Customer_model->customer_package($customer_id);
        $data['customer_package'] = $customer_package;

        $package_id = $customer_package->package_id;
        $data['package_id'] = $package_id;

        $package_data = $this->Customer_model->package_data($package_id);
        $data['package_data'] = $package_data;

        $cus_history = $this->Customer_model->cus_history($customer_id);
        $data['cus_history'] = $cus_history;


        $this->load->view('head',$data);
        $this->load->view('customer/header',$data);
        $this->load->view('customer/history',$data);
        $this->load->view('footer',$data);
    }

    public function withdrawal(){
        $data['title'] = "Withdrawal";
        $data['main'] = "Customer";
        $data['sub'] = "Withdrawal";

        $customer_id = $this->session->customer_id;
        $data['customer_id'] = $customer_id;

        $this->load->view('head',$data);
        $this->load->view('customer/header',$data);
        $this->load->view('customer/withdrawal',$data);
        $this->load->view('footer',$data);
    }

    public function approval_submit(){
        $currentTimestamp = date('Y-m-d H:i:s');
        $customer_id = $this->input->post('customer_id');
        $this->form_validation->set_rules('package', 'Package', 'required');
        $this->form_validation->set_rules('interest', 'Interest', 'required|numeric');
        $this->form_validation->set_rules('start_date', 'Start date', 'required');

        if ($this->form_validation->run() == FALSE)
        {
                $this->approval($customer_id);
        }
        else{
            $package = $this->input->post('package');
            $interest = $this->input->post('interest');
            $start_date = $this->input->post('start_date');

            $approval_data = array(
                'package_id' => $package,
                'rate' => $interest,
                'start_date' => $start_date,
                'customer_id' => $customer_id,
                'created_at' => $currentTimestamp
            );

            if ($this->Customer_model->approve_customer($approval_data)) {
                //Update customer tbl 
                $new_data = array(
                    'approved' => 1, // Specify the column and its new value
                    // Add more columns as needed
                );
                $this->Customer_model->update_data($customer_id, $new_data);

                $pack_id = $this->Customer_model->customer_package($customer_id)->package_id;

                $amount = $this->Customer_model->package_data($pack_id)->amount;

                $bonus = $this->Customer_model->package_data($pack_id)->ref_bonus;

                $ref_id = $this->Customer_model->customer_data($customer_id)->ref_id;

                if ($ref_id > 0) {
                    // History
                    $ref_history_data = array(
                        'transaction' => 3,
                        'customer_id' => $ref_id,
                        'history_date' => $currentTimestamp,
                        'amount' => $bonus,
                        'created_at' => $currentTimestamp,
                    );
        
                    $this->Customer_model->insert_history($ref_history_data);
                }
                // History
                $history_data = array(
                    'transaction' => 0,
                    'customer_id' => $customer_id,
                    'history_date' => $currentTimestamp,
                    'amount' => $amount,
                    'created_at' => $currentTimestamp,
                );
    
                $this->Customer_model->insert_history($history_data);

                redirect('customers');
            }
        }
    }

    public function withdrawal_request(){
        $currentTimestamp = date('Y-m-d H:i:s');
        $customer_id = $this->session->customer_id;
        
        $amount = $this->input->post('amount');

        $req_data = array(
            'amount' => $amount,
            'customer_id' => $customer_id,
            'request_date' => $currentTimestamp,
            'status' => 0,
        );

        if ($this->Customer_model->insert_withdrawal($req_data)) {
            $history_data = array(
                'transaction' => 1,
                'customer_id' => $customer_id,
                'history_date' => $currentTimestamp,
                'amount' => $amount,
                'created_at' => $currentTimestamp,
            );

            $this->Customer_model->insert_history($history_data);

            $this->session->set_flashdata('message', 'Your withdrawal request has been sent!');
            redirect('customer_dashboard');
        }
    }
}

/* End of file Customer_controller.php and path \application\controllers\Customer_controller.php */
