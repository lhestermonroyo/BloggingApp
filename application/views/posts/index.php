<h2><?=$title;?></h2>
<?php
  foreach($posts as $post) :
?>
  <div class="card">
    <div class="card-body">
    <h3 style="margin-bottom: -5px;"><?=$post['title'];?></h3> 
    <small>Posted on: <?=date("F j, Y - h:ia", strtotime($post['created_at']));?> &bull; <span class="badge badge-success"><?=$post['name'];?></span></small>

    <div class="row">
      <div class="col-lg-3">
        <img class="img-thumbnail img-responsive" style="margin-top:12px;" src="<?=site_url();?>assets/images/posts/<?=$post['image'];?>" alt="">
      </div>
      <div class="col-lg-9">
        <p class="mt-2"><?=word_limiter($post['body'], 30);?></p>
        <a href="<?=site_url('/posts/'.$post['slug']);?>" class="btn btn-secondary">Read More</a>
      </div>
    </div>

    </div>
  </div>
<?php
  endforeach;
?>
<ul class="pagination">
<?=$this->pagination->create_links();?>
</ul>
