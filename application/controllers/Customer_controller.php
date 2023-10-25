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
        $this->load->view('head');
        $this->load->view('customer/register');
        $this->load->view('footer');
    }

    public function login()
    {
        if ($this->session->userdata('customer_logged')) {
            redirect('customer_dashboard');
        } 
        $this->load->view('head');
        $this->load->view('customer/login');
        $this->load->view('footer');
    }

    public function dashboard()
    {   
        if ($this->session->userdata('customer_logged')) {
            $customer_id = $this->session->userdata('customer_id');
        } 
        $data['customer_data'] = $this->Customer_model->customer_data($customer_id);
        $this->load->view('head',$data);
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
                // Set session data
                $data = array(
                    'customer_id' => $customer_id,
                    'customer_logged' => true,
                );
                // Create log
                $log_data = array(
                    'customer_id' => $customer_id,
                    'log_time' => $currentTimestamp,
                    'type' => 1
                );
                $this->Customer_model->create_log($log_data);

                $this->session->set_userdata($data);
                redirect('customer_dashboard');
            } else {
                // Passwords don't match, show error message or redirect back to login page
                $this->session->set_flashdata('error', 'Invalid username or password!');
                redirect('customer_login');
            }
        }
    }

    public function customer_logout() {
        $currentTimestamp = date('Y-m-d H:i:s');
        // Create log
        $log_data = array(
            'customer_id' => $this->session->customer_id,
            'log_time' => $currentTimestamp,
            'type' => 0
        );
        $this->Customer_model->create_log($log_data);
        $this->session->sess_destroy(); // Destroy all session data
        redirect('customer_login'); // Redirect to the login page or any other desired page
    }

    public function all_customers(){
        $data['customers'] = $this->Customer_model->all_customers();
        $this->load->view('head',$data);
        $this->load->view('customer/all_customers',$data);
        $this->load->view('footer',$data);
    }
}

/* End of file Customer_controller.php and path \application\controllers\Customer_controller.php */
