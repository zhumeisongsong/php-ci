<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'record/total';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['(:any)'] = 'record/$1';
