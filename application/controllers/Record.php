<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Record extends MY_Controller
{
    //common_set: file_check url_helper
    function common_set($page){
        if (!file_exists(APPPATH . 'views/templates/pages/' . $page . '.php')) {
            show_404();
        }

        $this->load->helper('url');
    }

    //each page view_template
    function view_template ($page ,$data){
        $this->load->view('templates/include/header', $data);
        $this->load->view('templates/include/nav', $data);
        $this->load->view('templates/include/aside', $data);
        $this->load->view('templates/pages/' . $page, $data);
        $this->load->view('templates/include/footer', $data);
    }
    public function total($page = 'list')
    {
        $data['title'] = 'Record List';
        $data['num'] = '123456789';
        $this->assign('data', $data);

        common_set($page);
        $this->view_template(@$page,$data);
    }


    public function edit($page='edit_record')
    {
        if(TRUE){
            $data['title'] = 'Record Add';
        }else{
            $data['title'] = 'Record Detail';
        }


        common_set($page);
        echo 'index';

    }

}

