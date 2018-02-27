<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['editProfileEmergency']  = 'main/editProfileEmergency';
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
$route['resendEmail']  = 'main/resendEmail';
$route['incorrectpassword']  = 'main/incorrectpassword';
$route['updatePostContent']  = 'main/updatePostContent';
$route['deletePostContent']  = 'main/deletePostContent';
$route['incorrectpassword']  = 'main/incorrectpassword';
$route['removeStudentFromSupervisor']  = 'main/removeStudentFromSupervisor';
$route['unverifyLog']  = 'main/unverifyLog';
$route['loadStudentInfo']  = 'main/loadStudentInfo';
$route['changeOjtStatusSameCompany']  = 'main/changeOjtStatusSameCompany';
$route['newcompany']  = 'main/newCompany';
$route['changeOjtStatusDifferentCompany']  = 'main/changeOjtStatusDifferentCompany';
$route['loadMidtermEvaluations']  = 'main/loadMidtermEvaluations';
$route['loadFinalEvaluations']  = 'main/loadFinalEvaluations';
$route['loadAdminGraphs']  = 'main/loadAdminGraphs';
$route['loadSupervisorTable']  = 'main/loadSupervisorTable';
$route['loadAdminStudentFilters']  = 'main/loadAdminStudentFilters';
$route['loadSupervisorFilters']  = 'main/loadSupervisorFilters';
$route['retrySendEmail']  = 'main/retrySendEmail';
$route['loadCompaniesTable']  = 'main/loadCompaniesTable';
$route['editSupervisor']  = 'main/editSupervisor';
$route['deleteCompanyWatchlist']  = 'main/deleteCompanyWatchlist';
$route['nloDashboard']  = 'main/nloDashboard';
$route['editCompany'] = 'main/editCompany';
$route['deleteCompany'] = 'main/deleteCompany';
$route['addCompany']='main/addCompany';
$route['validCompanies']  = 'main/validCompanies';
$route['companylist'] = 'main/companylist';
$route['viewpdf'] = 'main/viewpdf';
$route['watchlisted'] = 'main/viewWatchlisted';
$route['deleteSupervisor']  = 'main/deleteSupervisor';
$route['addCsvCompany']  = 'main/addCsvCompany';
$route['getNloCompanyModal']  = 'main/getNloCompanyModal';
$route['validateCompany']  = 'main/validateCompany';









