<?php

class Comments extends CI_Controller {
  public function create($post_id) {
    $slug = $this->input->post("slug");
    $data['post'] = $this->posts_model->get_posts($slug);

    $this->form_validation->set_rules('fullname', 'Fullname', 'required');
    $this->form_validation->set_rules('email', 'E-mail', 'required');
    $this->form_validation->set_rules('comment', 'Comment', 'required');

    if($this->form_validation->run() === FALSE) {
      $this->load->view("templates/header");
      $this->load->view("posts/view", $data);
      $this->load->view("templates/footer");
    }
    else {
      $this->comment_model->create_comment($post_id);
      redirect('posts/'.$slug);
    }
  }
}
?>