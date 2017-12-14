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
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['dashboard']  = 'main/dashboard';
$route['logout']  = 'main/logout';
$route['index']  = 'main/index';
$route['profile']  = 'main/profile';
$route['changepassword']  = 'main/changepassword';
$route['addLogs']  = 'main/addLogs';
$route['editLog']  = 'main/editLog';
$route['deleteLog']  = 'main/deleteLog';
$route['loadSpecificLog']  = 'main/loadSpecificLog';
$route['saveImage']  = 'main/saveImage';
$route['savePassword']  = 'main/savePassword';
$route['supervisorSaveImage']  = 'main/supervisorSaveImage';
$route['getannouncements']  = 'main/getAnnouncementsInterval';
$route['viewevaluation/(:any)']  = 'main/evaluate/$1';
$route['supervisordashboard']  = 'main/supervisorDashboard';
$route['admindashboard']  = 'main/adminDashboard';
$route['ojtform']  = 'main/ojtform';
$route['truncate']  = 'main/truncate';
$route['adminAddSupervisor']  = 'main/adminAddSupervisor';
$route['adminAddAdmin']  = 'main/adminAddAdmin';
$route['addTrainee']  = 'main/addTrainee';
$route['saveCSV']  = 'main/saveCSV';
$route['addWatchlist']  = 'main/addWatchlist';
$route['filterStudent']  = 'main/filterStudent';
$route['emailcheck']  = 'main/emailCheck';
$route['addStudent']  = 'main/addStudent';
$route['editProfilePersonal']  = 'main/editProfilePersonal';
$route['editProfileFamily']  = 'main/editProfileFamily';
$route['editProfileCompany']  = 'main/editProfileCompany';
$route['editComment']  = 'main/editComment';
$route['insertCompanyClassification']  = 'main/insertCompanyClassification';
$route['saveEmail']  = 'main/saveEmail';
$route['insertRegistration']  = 'main/insertRegistration';
$route['studentdashboard/(:any)']  = 'main/studentDashboard/$1';
$route['viewmidterm/(:any)']  = 'main/viewMidterm/$1';
$route['viewfinal/(:any)']  = 'main/viewFinal/$1';
$route['workmate/(:any)']  = 'main/workmate/$1';
$route['studentinfo/(:any)']  = 'main/studentInfo/$1';
$route['deleteStudent']  = 'main/deleteStudent';
$route['filterLogsForSupervisor']  = 'main/filterLogsForSupervisor';

$route['confirmSend']  = 'main/confirmSend';
$route['incorrectpassword']  = 'main/incorrectpassword';

$route['updatePostContent']  = 'main/updatePostContent';
$route['deletePostContent']  = 'main/deletePostContent';
$route['incorrectpassword']  = 'main/incorrectpassword';




