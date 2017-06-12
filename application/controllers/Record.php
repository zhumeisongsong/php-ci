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

		//pagination
		$this->load->library('pagination');
		$config['base_url'] = site_url('record/total');

		//page num get & reset page1
		$current_page = (int)$this->uri->segment(3);
		if (0 == $current_page) {
			$current_page = 1;
		}

		//model variables
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
		$data['records'] = $result['list'];

		$data['base_url'] = base_url();//get_base_url
		$data['aside'] =config_item('aside');//get_base_url

		//smarty
		$this->assign('data', $data);
		$this->display(APPPATH . 'views/templates/layout.tpl');
	}

	/**
	 *detail
	 */
	public function detail()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$page = 'edit_record';
		$id = (int)$this->uri->segment(3);

		$result = $this->record_model->get_detail($id);

		//structure data
		$data['title'] = 'Record Detail';
		$data['page'] = $page;
		$data['record'] = $result['detail'];
		$data['record_track'] = $result['track'];
		$this->aside_data();

		$this->assign('data', $data);
		$this->display(APPPATH . 'views/templates/layout.tpl');
	}

	/**
	 *submit
	 */
	public function submit()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules(' albumName', 'albumName', 'required');

		$page = 'edit_record';

		$data['title'] = 'Record Detail';
		$data['page'] = $page;

		$this->assign('data', $data);
		$this->common_set($page);

		//submit result
		if ($this->form_validation->run() === FALSE) {
			$this->display(APPPATH . 'views/templates/layout.tpl');
		} else {
			$id = (int)$this->uri->segment(3);
			echo $id;
			if ($id) {
				$this->record_model->update_detail($id);
				echo 'success update';
			}
//			else {
//				$this->record_model->add_detail();
//				echo 'success add';
//			}

		}

	}
}
