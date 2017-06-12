<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['aside'] = array
(
	array(
		"title" => "User",
		"icon" => "user",
		"dropdown_list" => array(
			array(
				"path" => "user/total",
				"title" => "List",
			),
		),
	),
	array(
		"title" => "Record",
		"icon" => "music",
		"dropdown_list" => array(
			array(
				"path" => "record/total",
				"title" => "List",
			),
//			array(
//				"path" => APPPATH."record/request",
//				"title" => "Request",
//			)
		),
	),

);


