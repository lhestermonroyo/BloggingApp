<h2><?=$title;?></h2>
<?=validation_errors();?>
<?=form_open_multipart('posts/create');?>
  <div class="form-group">
    <input type="hidden" name="user_id" value="<?=$this->session->userdata('user_id');?>">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea class="form-control" id="editor" rows="7" name="body" placeholder="Enter content"></textarea>
  </div>
  <div class="form-group">
    <label>Upload Image</label>
    <input type="file" class="form-control" name="userfile" placeholder="Upload image">
  </div>
  <div class="form-group">
    <label>Category</label>
    <select name="cat_id" class="form-control">
    <?php foreach($category as $item):?>
      <option value="<?=$item['id'];?>"><?=$item['name'];?></option>
    <?php endforeach;?>
    <option selected="selected">Select Category</option>
    </select>
  </div>
  <button type="submit" class="btn btn-secondary">Add Post</button>
</form>  
