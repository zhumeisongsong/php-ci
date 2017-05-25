<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Commodity extends CI_Controller
{

    public function total($page = 'list')
    {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            show_404();
        }
        $data['title'] = ucfirst($page);
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer', $data);
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
