<!--模型代表数据-->
<?php

class Record_model extends CI_model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function record_list($slug = FALSE)
    {
        if ($slug===FALSE) {
          $query = $this->db->get('record');
          return $query->result_array();
        }
        $query=$this->db->get_where('record',array('slug'=>$slug));//查询构造器检查
        return $query->row_array();
    }

}
