<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['admin/dashboard']['get'] = 'admin/DashboardController/index';


$route['admin/room']['get'] = 'admin/RoomController/index';
$route['admin/room/create']['get'] = 'admin/RoomController/create';
$route['admin/room/create']['post'] = 'admin/RoomController/store';
