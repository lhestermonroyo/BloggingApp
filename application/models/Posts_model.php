<?php
  class Posts_model extends CI_Model {
    public function __construct() {
      $this->load->database();
    }

    public function get_posts($slug = FALSE, $limit = FALSE, $offset = FALSE) {
      if ($limit) {
        $this->db->limit($limit, $offset);
      }
      
      if($slug == FALSE) {
        $this->db->order_by('posts.id', 'DESC');
        $this->db->join('categories', 'categories.id = posts.cat_id');
        $query = $this->db->get('posts');
        return $query->result_array(); 
      }

      $query = $this->db->get_where('posts', array('slug' => $slug));
      return $query->row_array();
    }
    
    public function create_post($image) {
      $slug = url_title($this->input->post('title'));

      $data = array(
        'user_id' => $this->input->post('user_id'),
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'body' => $this->input->post('body'),
        'image' => $image,
        'cat_id' => $this->input->post('cat_id')
      );

      return $this->db->insert('posts', $data);
    }

    public function delete_post($id) {
      $image_file = $this->db->select('image')->get_where('posts', array('id' => $id))->row()->image;
      if ($image_file != "noimage.png") {
        $cwd = getcwd();
        $file_path = $cwd."\\assets\\images\\posts\\";
        chdir($file_path);
        unlink($image_file);
        chdir($cwd);
      }
        
      $this->db->where('id', $id);
      $this->db->delete('posts');
      return true;
    }

    public function update_post($image) {
      $slug = url_title($this->input->post('title'));

      $data = array(
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'body' => $this->input->post('body'),
        'image' => $image,
        'cat_id' => $this->input->post('cat_id')
      );

      $this->db->where('id', $this->input->post('id'));
      return $this->db->update('posts', $data);
    }

    public function get_categories() {
      $this->db->order_by('name', 'ASC');
      $query = $this->db->get('categories');
      return $query->result_array();
    }

    public function get_posts_by_category($id) {
      $this->db->order_by('posts.id', 'DESC');
      $this->db->join('categories', 'categories.id = posts.cat_id');
      $query = $this->db->get_where('posts', array('cat_id' => $id));
      return $query->result_array(); 
    }
  }
?>
