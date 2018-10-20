<?php

class Category_model extends CI_Model {
  public function __construct() {
    $this->load->database();
  }

  public function get_categories() {
    $this->db->order_by('name', 'ASC');
    $query = $this->db->get('categories');
    return $query->result_array();
  }

  public function create_category() {
    $data = array(
      'user_id' => $this->input->post('user_id'),
      'name' => $this->input->post('name')
    );

    return $this->db->insert('categories', $data);
  }

  public function delete_category($id) {
    $this->db->where('id', $id);
    $this->db->delete('categories');
    return true;
  }

  public function get_category($id) {
    $query = $this->db->get_where('categories', array('id' => $id));
    return $query->row();
  }
}
?>