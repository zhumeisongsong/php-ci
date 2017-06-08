<?php

class Record_model extends CI_model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

//    public function add()
//    {
//        $data = array(
//            'name' => 'aaa',
//            'image' => 'url',//push image add
//            'label' => 'index',
//            'year' => 'xxx/xx/xx',//select
//            'country' => 'dddd',//select
//            'gerne' => '??',//what?//select
//            'format' => 'mp3',
//            'catalog' => '49494994',
//            'price' => '444',
//            'track' => 'url'//push music?add
//        );
//        return $this->db->insert("record", $data);
//    }
//
//    public function update($id)
//    {
//        $data = array(
//            'name' => 'aaa',
//            'image' => 'url',
//            'label' => 'index',
//            'year' => 'xxx/xx/xx',
//            'country' => 'dddd',
//            'gerne' => '??',
//            'format' => 'mp3',
//            'catalog' => '49494994',
//            'price' => '444',
//            'track' => 'url'
//        );
//        $this->db->where('id', $id);
//        return $this->db->update('record', $data);
//    }
//
//    public function delete($id)
//    {
//        $this->db->where('id', $id);
//        return $this->db->delete('record');
//    }
//
//    public function fetch_all()
//    {
//        $query = $this->db->get('User');
//        return $query->result_array();
//    }
//
//    public function get_item($id)
//    {
//        $this->db->where('id', $id);
//        $this->db->select('*');
//        $query = $this->db->get('record');
//        return $query->result();
//    }

	public function get_records($offset, $num, $order)
	{
		$table_name = 'crawler_vinyl_raw_info';
		$sql = "SELECT id,albumName,artistName,delFlg FROM $table_name WHERE id!=0 ORDER BY {$order} limit {$offset},{$num}";

		$query = $this->db->query($sql);

		return array(
			'total' => $this->db->count_all($table_name),
			'list' => $query->result_array(),
		);
	}

//	public function get_record_detail($id){
//
//	}
}

