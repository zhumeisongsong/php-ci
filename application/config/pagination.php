<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['uri_segment'] = 3;
$config['num_links'] = 3;
$config['use_page_numbers'] = TRUE;

//pagination section
$config['full_tag_open'] = '<ul class="pagination pagination-sm">';
$config['full_tag_close'] = '</ul>';

//first tag
$config['first_tag_open'] = '<li>';
$config['first_tag_close'] = '</li>';

//last tag
$config['last_tag_open'] = '<li>';
$config['last_tag_close'] = '</li>';

//next
$config['next_tag_open'] = '<li>';
$config['next_tag_close'] = '</li>';

//prev
$config['prev_tag_open'] = '<li>';
$config['prev_tag_close'] = '</li>';

//current tag
$config['cur_tag_open'] = '<li class="current-page-num"><a href="javascript:;">';
$config['cur_tag_close'] = '</a></li>';

//number
$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';

