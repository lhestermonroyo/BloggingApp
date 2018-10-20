<h2><?=$title;?></h2>
<?=validation_errors();?>
<?=form_open_multipart('posts/update');?>
  <input type="hidden" name="id" value="<?=$post['id'];?>">
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" value="<?=$post['title'];?>" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea class="form-control" id="editor" rows="7" name="body" placeholder="Enter content"><?=$post['body'];?></textarea>
  </div>
  <div class="form-group">
    <label>Change Image</label>
    <input type="file" class="form-control" name="userfile" placeholder="Upload image">
  </div>
  <div class="form-group">
    <label>Category</label>
    <select name="cat_id" class="form-control">
    <?php foreach($category as $item):
      if ($item['id'] == $post['cat_id']) {
      ?>
        <option selected="selected" value="<?=$item['id'];?>"><?=$item['name'];?></option>
      <?php    
      } else {
      ?>
      <option selected="selected" value="<?=$item['id'];?>"><?=$item['name'];?></option>
      <?php
      }
      endforeach; ?>
    <option>Select Category</option>
    </select>
  </div>
  <button type="submit" class="btn btn-secondary">Update Post</button>
</form>  
