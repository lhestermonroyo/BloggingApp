<h2><?=$title;?></h2>

<?=validation_errors();?>
<?=form_open_multipart("categories/create");?>
  <input type="hidden" name="user_id" value="<?=$this->session->userdata('user_id');?>">
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="name" placeholder="Enter category">
  </div>
  <button type="submit" class="btn btn-secondary">Add Category</button>
</form>