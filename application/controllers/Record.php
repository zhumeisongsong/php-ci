<?php

defined('BASEPATH') OR exit('No direct script access allowed');
define('PAGE_PATH', APPPATH . 'views/templates/pages/');

class Record extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('record_model');
        $this->load->helper('url_helper');
    }

    //common_set: file_check url_helper
    function common_set($page)
    {
        if (!file_exists(PAGE_PATH . $page . '.tpl')) {
            show_404();
        }
    }

    /**
     * public function
     */
    public function total($page = 'list')
    {
        $data['title'] = 'Record List';
        $data['page'] = $page;

        //load pagination
        $this->load->library('pagination');

        //pagination config
        $config['base_url'] = site_url('record/total');
        $config['total_rows'] = $this->db->count_all_results('crawler_vinyl_raw_info');
        $config['per_page'] = 10;
        $config['use_page_numbers'] = TRUE;

        //init
        $this->pagination->initialize($config);


        //query data
        $page_num = (int)$this->uri->segment(3);
        $offset = $page_num == FALSE ? 0 : ($config['per_page'] * ($page_num - 1));

        $this->db->limit($config['per_page'], $offset);
        $data['records'] = $this->record_model->get_records();

        //pagination links
        $data['page_list'] = $this->pagination->create_links();

        $this->assign('data', $data);

        //$this->common_set($page);
        //output template
        $this->display(APPPATH . 'views/templates/layout.tpl');
    }

    public function add($page = 'edit_record')
    {
        $data['title'] = 'Add Record';
        $data['page'] = $page;

        $this->assign('data', $data);
        $this->common_set($page);
        $this->display(APPPATH . 'views/templates/layout.tpl');
    }

    public function edit($page = 'edit_record')
    {
        $data['title'] = 'Record Detail';
        $data['page'] = $page;

        $this->assign('data', $data);
        $this->common_set($page);
        $this->display(APPPATH . 'views/templates/layout.tpl');
    }
}

