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

// UserSide 
$route['default_controller'] = 'MANC';
$route['index']     = 'MANC/index';
$route['about']     = 'MANC/about';
$route['contact']   = 'MANC/contact';
$route['services']  = 'MANC/services';
$route['course_detail/(.*)']  = 'MANC/single_course/$1';
// $route['course_detail/(.*)']  = 'manc/udetail/$1';

// AdminSide

$route['login_dashboard']  = 'AC/index';
$route['login_act']        = 'AC/login_act';
$route['log_out']          = 'AC/log_out';

$route['admin_dashboard']  = 'AC/dashboard';

$route['admin_news']       = 'AC/news';


$route['admin_news_create']     = 'AC/news_create';
$route['admin_news_create_act'] = 'AC/news_create_act';


$route['admin_news_delete/(.*)'] = 'AC/delete_news/$1';
$route['admin_news_detail/(.*)'] = 'AC/news_detail/$1';


$route['admin_news_edit/(.*)']     = 'AC/news_edit/$1';
$route['admin_news_edit_act/(.*)'] = 'AC/news_edit_act/$1';
$route['admin_news_img_delete/(.*)'] = 'AC/news_img_delete/$1';

// XSide
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
