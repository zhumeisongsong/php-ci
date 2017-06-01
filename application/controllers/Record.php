<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Record extends MY_Controller
{
    public function index()
    {
        echo 'index';
    }

    public function total($page = 'list')
    {
        $data['title'] = '商品列表列表';
        $data['num'] = '123456789';
        $this->assign('data', $data);
        if (!file_exists(APPPATH . 'views/templates/pages/' . $page . '.php')) {
            show_404();
        }
//        $data['title'] = ucfirst($page);
        $this->load->view('templates/include/header', $data);
        $this->load->view('templates/include/nav', $data);
        $this->load->view('templates/include/aside', $data);
        $this->load->view('templates/pages/' . $page, $data);
        $this->load->view('templates/include/footer', $data);
    }


    public function edit()
    {
        echo 'hello edit';
    }

    public function update()
    {
        echo 'hello change';
    }

}
