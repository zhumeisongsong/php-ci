<?php

defined('BASEPATH') OR exit('No direct script access allowed');
define('PAGE_PATH', APPPATH . 'views/templates/pages/');

class Record extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('record_model', '', TRUE);
		$this->load->helper(
			array('url', 'file_exist')
		);
	}

	/**
	 *total
	 */
	public function total()
	{
		$page = 'list';
		//construct data
		$data['title'] = 'Record List';
		$data['page'] = $page;
		$data['base_url'] = base_url('index.php/');//get_base_url
		$data['aside'] = config_item('aside');

		//pagination
		$this->load->library('pagination');
		$config['base_url'] = site_url('record/total');
		$current_page = (int)$this->uri->segment(3);
		if (0 == $current_page) {
			$current_page = 1;
		}
		$page_size = 10;
		$offset = ($current_page - 1) * $page_size;
		$order = 'id desc';
		$result = $this->record_model->get_records($offset, $page_size, $order);
		$config['total_rows'] = $result['total'];//总条数
		$this->pagination->initialize($config);
		$data['page_list'] = $this->pagination->create_links();

		$data['records'] = $result['list'];

		//smarty
		$this->assign('data', $data);
		$this->display(APPPATH . 'views/templates/layout.tpl');
	}

	/**
	 *detail
	 */
	public function detail()
	{
		$page = 'edit_record';
		//structure data
		$data['title'] = 'Record Detail';
		$data['page'] = $page;
		$data['base_url'] = base_url('index.php/');//get_base_url
		$data['aside'] = config_item('aside');

		$id = (int)$this->uri->segment(3);
		$detail = $this->record_model->get_detail($id);
		$track = $this->record_model->get_track($id);
		$data['record'] = $detail;
		$data['record_track'] = $track;

		$this->assign('data', $data);

		//form
		$this->load->helper('form');
		$this->load->library('form_validation');

		if ($this->form_validation->run() == FALSE) {
			$this->display(APPPATH . 'views/templates/layout.tpl');
		} else {
			$this->record_model->edit_detail($id);
			echo 'formsuccess';
		}
	}
}
