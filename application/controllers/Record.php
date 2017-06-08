<?php

defined('BASEPATH') OR exit('No direct script access allowed');
define('PAGE_PATH', APPPATH . 'views/templates/pages/');

class Record extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('record_model', '', TRUE);
		$this->load->helper('url_helper');
	}

	//common_set: file_check url_helper
	public function common_set($page)
	{
		if (!file_exists(PAGE_PATH . $page . '.tpl')) {
			show_404();
		}
	}

	/**
	 * public function
	 */
	public function total()
	{
		$page = 'list';

		//check page template is exist
		$this->common_set($page);

		//pagination
		$this->load->library('pagination');
		$config['base_url'] = site_url('record/total');


		//page num get & reset page1
		$current_page = (int)$this->uri->segment(3);
		if (0 == $current_page) {
			$current_page = 1;
		}

		// model variables
		$page_size = 10;
		$offset = ($current_page - 1) * $page_size;
		$order = 'id desc';

		$result = $this->record_model->get_records($offset, $page_size, $order);
		$config['total_rows'] = $result['total'];//总条数

		$this->pagination->initialize($config);

		//pagination links
		$data['page_list'] = $this->pagination->create_links();

		//construct data
		$data['title'] = 'Record List';
		$data['page'] = $page;
		$data["aside"] = config_item('aside');
		$data['records'] = $result['list'];


		//smarty
		$this->assign('data', $data);
		$this->display(APPPATH . 'views/templates/layout.tpl');
	}

	//detail render
	public function detail()
	{
		$page = 'edit_record';
		$data['title'] = 'Record Detail';
		$data['page'] = $page;
		$data["aside"] = config_item('aside');

		$this->assign('data', $data);
		$this->common_set($page);
		$this->display(APPPATH . 'views/templates/layout.tpl');
	}

	public function edit($page = 'edit_record')
	{
		$data['title'] = 'Record Detail';
		$data['page'] = $page;
		$data["aside"] = config_item('aside');

		$this->assign('data', $data);
		$this->common_set($page);
		$this->display(APPPATH . 'views/templates/layout.tpl');
	}
}
