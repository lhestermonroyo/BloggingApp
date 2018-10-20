<?php

class User_model extends CI_Model {
  public function __construct() {
    $this->load->database();
  }

  public function register($password) {
    $data = array(
      "fullname" => $this->input->post("fullname"),
      "zipcode" => $this->input->post("zipcode"),
      "email" => $this->input->post("email"),
      "username" => $this->input->post("username"),
      "password" => $password
    );

    return $this->db->insert("users", $data);
  }

  public function login($username, $password) {
    $result = $this->db->get_where('users', array('username' => $username, 'password' => $password));
    
    if($result->num_rows() != 0) {
      return $result->row(0)->id;
    } 
    else {
      return false;
    }
  }

  public function check_username_exists($username) {
    $query = $this->db->get_where('users', array('username' => $username));

    if (empty($query->row_array())) {
      return true;
    } else {
      return false; 
    } 
  }

  public function check_email_exists($email) {
    $query = $this->db->get_where('users', array('email' => $email));

    if (empty($query->row_array())) {
      return true;
    } else {
      return false; 
    }
    
  }
}
?>