<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Blog Application</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="https://bootswatch.com/4/darkly/bootstrap.min.css" />
  <link rel="stylesheet" href="<?=base_url();?>/assets/css/style.css">
  <!-- <script src="//cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script> -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="<?=base_url();?>">Blog Application</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url();?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url();?>posts">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url();?>categories">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url();?>about">About</a>
        </li>
      </ul>
      <ul class="navbar-nav">
      <?php if (!$this->session->userdata('logged_in')) : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url();?>users/register">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url();?>users/login">Log In</a>
        </li>
      <?php endif;?>
      <?php if ($this->session->userdata('logged_in')) : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url();?>posts/create">Add Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url();?>categories/create">Add Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url();?>users/logout">Log Out</a>
        </li>
      <?php endif;?>
      </ul>
    </div>
  </div>
</nav>

<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
  <?php
    if ($this->session->flashdata('user_registered')) :
    ?>
    <div class="alert alert-success">
      <?=$this->session->flashdata('user_registered');?>
    </div>
    <?php
    endif;
  ?>

  <?php
    if ($this->session->flashdata('post_created')) :
    ?>
    <div class="alert alert-success">
      <?=$this->session->flashdata('post_created');?>
    </div>
    <?php
    endif;
  ?>

  <?php
    if ($this->session->flashdata('post_updated')) :
    ?>
    <div class="alert alert-success">
      <?=$this->session->flashdata('post_updated');?>
    </div>
    <?php
    endif;
  ?>

  <?php
    if ($this->session->flashdata('post_deleted')) :
    ?>
    <div class="alert alert-success">
      <?=$this->session->flashdata('post_deleted');?>
    </div>
    <?php
    endif;
  ?>

  <?php
    if ($this->session->flashdata('category_created')) :
    ?>
    <div class="alert alert-success">
      <?=$this->session->flashdata('category_created');?>
    </div>
    <?php
    endif;
  ?>

  <?php
    if ($this->session->flashdata('category_deleted')) :
    ?>
    <div class="alert alert-success">
      <?=$this->session->flashdata('category_deleted');?>
    </div>
    <?php
    endif;
  ?>
  
  <?php
    if ($this->session->flashdata('user_loggedin')) :
    ?>
    <div class="alert alert-success">
      <?=$this->session->flashdata('user_loggedin');?>
    </div>
    <?php
    endif;
  ?>

  <?php
    if ($this->session->flashdata('user_loggedout')) :
    ?>
    <div class="alert alert-success">
      <?=$this->session->flashdata('user_loggedout');?>
    </div>
    <?php
    endif;
  ?>

  <?php
    if ($this->session->flashdata('login_failed')) :
    ?>
    <div class="alert alert-danger">
      <?=$this->session->flashdata('login_failed');?>
    </div>
    <?php
    endif;
  ?>

  
  
