<?php

$config =array(
	'record/detail'=>array(
		array(
			'field' => 'albumName',
			'label' => 'Name',
			'rules' => 'trim|required',
			'errors' => array(
				'required' => 'You must provide a %s.',
			),

		),
        array(
			'field' => 'artistName',
			'label' => 'Artist',
			'rules' => 'trim|required',
			'errors' => array(
				'required' => 'You must provide a %s.',
			),
		),
		array(
			'field' => 'label',
			'label' => 'Label',
			'rules' => 'trim'
		),
		array(
			'field' => 'releaseYear',
			'label' => 'Year',
		),
		array(
			'field' => 'releaseCountry',
			'label' => 'Country',
		),
		array(
			'field' => 'gerne',
			'label' => 'Gerne',
			'rules' => 'trim'
		),
		array(
			'field' => 'format',
			'label' => 'Format',
			'rules' => 'trim'
		),
		array(
			'field' => 'marketPrice',
			'label' => 'Market Price',
			'rules' => 'trim'
		),
		array(
			'field' => 'lowestPrice',
			'label' => 'Lowest Price',
			'rules' => 'trim'
		),
		array(
			'field' => 'medianPrice',
			'label' => 'Median Price',
			'rules' => 'trim'
		),
		array(
			'field' => 'highestPrice',
			'label' => 'Highest Price',
			'rules' => 'trim'
		),
	)
);

