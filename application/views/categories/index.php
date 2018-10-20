<h2><?=$title;?></h2>
<ul class="list-group">
<?php foreach($categories as $category) : ?>
  <li class="list-group-item"><a href="<?=site_url('/categories/posts/'.$category['id']);?>"><?=$category['name'];?></a>
  <?php if($this->session->userdata("user_id") == $category['user_id']) :?>
    <form class="cat-delete" action="categories/delete/<?=$category['id'];?>" method="POST">
      <button type="submit" onclick="return confirm('Are you sure you want to delete tihs category?')" class="btn btn-link">[&times;]</button>
    </form>
  <?php endif;?>
  </li>
<?php endforeach;?>
</ul>
