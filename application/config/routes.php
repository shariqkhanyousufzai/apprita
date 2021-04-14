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
$route['default_controller'] = 'auth/login';
// Add user route
$route['users/add'] = 'users/user/add_user';
// User List Route
$route['users/list'] = 'users/user/list_user';
// Get User Profile
$route['users/profile'] = 'users/profile';
// Update User Profile
$route['users/profile_update'] = 'users/profile/update_user';
// Change profle password
$route['users/profile_password'] = 'auth/change_password';
// show user information
$route['users/view/(:any)'] = 'users/user/view_user/$1';
// edit user information
$route['users/edit/(:any)'] = 'users/user/edit_user/$1';
//update user
$route['users/update'] = 'users/user/update_user';
//delete user
$route['users/delete/(:any)'] = 'users/user/delete_user/$1';

// DISCUSSION TAB START
$route['discussion/createtopic'] = 'discussion/create_topic';
// Add Topic to db
$route['discussion/addtopic'] = 'discussion/add_topic';
// show all discussions
$route['discussion/list'] = 'discussion/topic_list';
// DISCUSSION TAB START END
$route['discussion/view/(:any)'] = 'discussion/view_topic/$1';
// Add Topic Reply
$route['discussion/reply'] = 'discussion/add_topic_reply';
// My Topic List
$route['discussion/mylist'] = 'discussion/my_list';
// Send Message
$route['users/sendmessage'] = 'users/user/send_message';
//get Message
$route['users/getmessages'] = 'users/user/get_messages';
//get Message Number
$route['users/getactivemessages'] = 'users/user/get_active_messages';
//update Message Number
$route['users/updatemessagenumber'] = 'users/user/update_message_number';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
