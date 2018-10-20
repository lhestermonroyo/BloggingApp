<?=form_open("users/login");?>
<div class="row">
  <div class="col md-4"></div>
  <div class="col md-4">
    <h2><?=$title;?></h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <div class="form-group">
      <label>Username</label>
      <input type="text" class="form-control" name="username" placeholder="Enter username" required autofocus>
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" name="password" placeholder="Enter password" required autofocus>
    </div>
    <button type="submit" class="btn btn-secondary btn-block">Log In</button>
  </div>
  <div class="col md-4"></div>
</div>
<?=form_close();?>