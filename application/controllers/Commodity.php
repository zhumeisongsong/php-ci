<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
//
//class Commodity extends CI_Controller
//{
//
//    public function total($page = 'list')
//    {
//
//
//        $data['title'] = '商品列表';
//        $data['num'] = '123456789';
//        $this->assign('data',$data);
//        $this->assign('tmp','hello');
//        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
//            show_404();
//        }
//        $data['title'] = ucfirst($page);
//
//        $this->load->helper('url');
//        $this->load->view('templates/header', $data);
//        $this->load->view('templates/nav', $data);
//        $this->load->view('templates/aside', $data);
//        $this->load->view('pages/' . $page, $data);
//        $this->load->view('templates/footer', $data);
//    }
//
//
//    public function edit()
//    {
//        echo 'hello edit';
//    }
//
//    public function update()
//    {
//        echo 'hello change';
//    }
//
//}
