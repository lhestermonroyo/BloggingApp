<div class="card">
  <div class="card-body">
    <h3 style="margin-bottom: -5px;"><?=$post['title'];?></h3> 
    <small>Posted on: <?=date("F j, Y - h:ia", strtotime($post['created_at']));?></small>
    <p class="mt-2"><?=$post['body'];?></p>
    <img class="img-thumbnail img-responsive" style="width: 100%;" src="<?=site_url();?>assets/images/posts/<?=$post['image'];?>" alt="">
    <hr>
    <?php if($this->session->userdata("user_id")) :?>
    <a href="edit/<?=$post['slug'];?>" class="btn btn-secondary float-left mr-2">Edit</a>
    <?=form_open('posts/delete/'.$post['id']);?>
      <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')" class="btn btn-danger">Delete</button>
    </form>
    <hr>
    <?php endif;?>
    <?php if($comments) :?>
      <?php foreach($comments as $comment) :?>
      <div class="card bg-secondary">
        <div class="card-body">
          <p style="margin-bottom: -5px;"><strong><?=$comment['fullname'];?></strong></p>
          <small>E-mail: <?=$comment['email'];?> &bull; Posted at: <?=date("F j, Y - h:ia", strtotime($comment['created_at']));?> </small>
          <p class="mt-2"><?=$comment['comment'];?></p>
        </div>
      </div>
      <?php endforeach;?>
    <?php else :?>
      <p>No comments to show.</p>
    <?php endif;?>
    <hr>
    <h4>Add Comment</h4>
    <?=validation_errors();?>
    <?=form_open('comments/create/'.$post['id']);?>
    <input type="hidden" name="slug" value="<?=$post['slug'];?>">
    <div class="form-group">
      <label>Fullname</label>
      <input type="text" class="form-control" name="fullname" placeholder="Enter fullname">
    </div>
    <div class="form-group">
      <label>E-mail</label>
      <input type="email" class="form-control" name="email" placeholder="Enter e-mail">
    </div>
    <div class="form-group">
      <label>Comment</label>
      <textarea class="form-control" rows="3" name="comment" placeholder="Enter comment"></textarea>
    </div>
    <button type="submit" class="btn btn-secondary">Add Comment</button>
    </form>
  </div>
</div>