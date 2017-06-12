<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'record/total';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//record
$route['(:any)'] = 'record/total';
$route['record'] = 'record/total';
$route['record/total'] = 'record/total';
$route['record/submit'] = 'record/submit';
$route['record/detail'] = 'record/detail';
