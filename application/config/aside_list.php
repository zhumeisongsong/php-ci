<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['aside'] = array
(
	array(
		"controller" => "user",
		"title" => "User",
		"icon" => "user",
		"dropdown_list" => array(),
	),
	array(
		"controller" => "record",
		"title" => "Record",
		"icon" => "music",
		"dropdown_list" => array(
			array(
				"function" => "total",
				"title" => "List",
			),
			array(
				"function" => "request",
				"title" => "Request",
			)

		),
	),

);
