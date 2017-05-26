<?php
class MY_controller extends CI_Controller
{
    public function __construct()
    {
        date_default_timezone_set("PRC");
        parent::__construct();
    }
    public function assign($key,$val)
    {
        $this->ci_smarty->assign($key,$val);
    }
    public function display($html)
    {
        $this->ci_smarty->display($html);
    }
}