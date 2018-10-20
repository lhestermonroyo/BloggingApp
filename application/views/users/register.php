<?=form_open('users/register');?>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <h2><?=$title;?></h2>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
      <?=validation_errors();?>
      <div class="form-group">
        <label>Fullname</label>
        <input type="text" class="form-control" name="fullname" placeholder="Enter fullname">
      </div>
      <div class="form-group">
        <label>Zipcode</label>
        <input type="text" class="form-control" name="zipcode" placeholder="Enter zipcode">
      </div>
      <div class="form-group">
        <label>E-mail</label>
        <input type="email" class="form-control" name="email" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="username" placeholder="Enter username">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="Enter password">
      </div>
      <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" class="form-control" name="password2" placeholder="Enter confirm password">
      </div>
      <button type="submit" class="btn btn-secondary">Create Account</button>
    </div>
    <div class="col-md-3"></div>
  </div>
  <?=form_close();?>
