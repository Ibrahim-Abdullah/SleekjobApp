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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Student/student/index';
$route['home'] = 'Student/student/index';

$route['student/register'] = 'Student/student/register';
$route['Admin/admin/login'] = 'Admin/admin/index';
$route['admin/login'] = 'Admin/admin/login';
$route['admin/logout'] = 'Admin/admin/logout';

$route['admin'] ='Admin/admin/index';

$route['admin/(:any)'] ='Admin/admin/index';

$route['retrieve_student_info'] = 'Admin/admin/retrieve_student_info';
$route['retrieve_student_info/(:any)'] = 'Admin/admin/retrieve_student_info';
$route['retrieve_student_info_update/$1'] = 'Admin/admin/retrieve_student_info_update/$1';
$route['update_record'] = 'Admin/admin/update_record';
$route['sort_param'] = 'Admin/admin/sort_param';
$route['get_student_course'] = 'Admin/admin/get_student_course';
$route['get_student_school'] = 'Admin/admin/get_student_school';
$route['get_all_student_info'] = 'Admin/admin/get_all_student_info';
$route['get_fully_paid_student/(:any)'] = 'Admin/admin/get_fully_paid_student/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
