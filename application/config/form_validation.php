<?php

$config =array(
	'record/detail'=>array(
		array(
			'field' => 'albumName',
			'label' => 'name',
			'rules' => 'trim|required'
		),
        array(
			'field' => 'artistName',
			'label' => 'artist',
			'rules' => 'trim|required'
		),
	)
);

