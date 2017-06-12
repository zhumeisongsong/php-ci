<?php

class Record_model extends CI_model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

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

	public function get_records($offset, $num, $order)
	{
		$table_name = 'crawler_vinyl_raw_info';
		$sql = "SELECT id,albumName,artistName,delFlg FROM $table_name WHERE delFlg=0 ORDER BY {$order} limit {$offset},{$num}";

		$query = $this->db->query($sql);

		return array(
			'total' => $this->db->count_all($table_name),
			'list' => $query->result_array(),
		);
	}

	public function get_detail($id)
	{
		$table = 'crawler_vinyl_raw_info';
		$sql = "SELECT * FROM $table WHERE id=$id";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function get_track($id)
	{
		$table = 'crawler_vinyl_track_list';
		$sql = "SELECT * FROM $table WHERE vinylID=$id";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function edit_detail($id)
	{
		$this->load->helper('url');

		$table_name = 'crawler_vinyl_raw_info';

		$data = array(
			'albumName' => $this->input->post('albumName'),
			'artistName' => $this->input->post('artistName'),
			'albumName' => $this->input->post('albumName'),
			'albumName' => $this->input->post('albumName'),
			'albumName' => $this->input->post('albumName'),
			'albumName' => $this->input->post('albumName'),
			'albumName' => $this->input->post('albumName'),
			'albumName' => $this->input->post('albumName'),
			'albumName' => $this->input->post('albumName'),
			'albumName' => $this->input->post('albumName'),
		);

		$this->db->where('id', $id);
		return $this->db->replace($table_name, $data);
	}

//	public function update_datail($id)
//	{
//		$this->load->helper('url');
//
//		$table_name = 'crawler_vinyl_raw_info';
//
//		$data = array(
//			'albumName' => $this->input->post('albumName'),
//		);


//	}
}

