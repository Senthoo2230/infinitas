<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Login_controller extends CI_Controller {

public function __construct() {
    parent::__construct();
    $this->load->model('User_model');
}

public function index()
{
    $this->load->view('head');
    $this->load->view('login/login');
    $this->load->view('footer');
}

public function register()
{
    $this->load->view('head');
    $this->load->view('login/register');
    $this->load->view('footer');
}

public function signup()
{
    // Set validation rules
    $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
    $this->form_validation->set_rules('confirm_pwd', 'Repeat Password', 'required|matches[password]');

    if ($this->form_validation->run() == FALSE) {
        // Validation failed, show the registration form again
        $this->register();
    } else {
        // Validation passed, register the user
        $user_data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );

        // Call the register_user method of the User_model
        if ($this->User_model->register_user($user_data)) {
            // Registration successful, redirect to a success page
            // Set a success flash message
            $this->session->set_flashdata('success', 'The operation was successful!');
            redirect('login');
        } else {
            // Registration failed, show an error message
            $this->session->set_flashdata('error', 'Something went wrong!');
            redirect('register');
        }
    }
} 



    public function signin(){
        
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
                $this->index();
        }
        else
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            // Retrieve hashed password from the database based on the username
            $hashed_password_from_db = $this->User_model->getHashedPasswordFromDB($username);
            if (password_verify($password, $hashed_password_from_db)) {
                // Passwords match, user is authenticated, proceed with login logic
                redirect('dashboard');
            } else {
                // Passwords don't match, show error message or redirect back to login page
                $this->session->set_flashdata('error', 'Invalid username or password!');
                redirect('login');
            }
        }
    }
}
        
/* End of file  Login_controller.php */
        
                            