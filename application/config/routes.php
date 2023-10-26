<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Login_controller/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Login
$route['login'] = 'Login_controller/index';
$route['register'] = 'Login_controller/register';
$route['signup']['post'] = 'Login_controller/signup';
$route['signin']['post'] = 'Login_controller/signin';

//Dashboard
$route['dashboard'] = 'Dashboard_controller/index';

// Customer
$route['customer_signup'] = 'Customer_controller/signup';
$route['customer_login'] = 'Customer_controller/login';
$route['customer_logout'] = 'Customer_controller/customer_logout';
$route['customer_dashboard'] = 'Customer_controller/dashboard';
$route['customer_signin']['post'] = 'Customer_controller/signin';
$route['customer_register']['post'] = 'Customer_controller/customer_register';

$route['approval/submit']['post'] = 'Customer_controller/approval_submit';

$route['customers'] = 'Customer_controller/all_customers';
$route['customer/approval/(:num)'] = 'Customer_controller/approval/$1';
