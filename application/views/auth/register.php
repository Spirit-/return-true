<?php
/**
 * User: Spirit
 * Date: 07.02.14
 */?>

<div class="col-md-6 col-md-offset-3">
    <div class="well">
  <?php  echo Form::open('', array('method'=>'post', 'class'=>'form-horizontal'));?>
<div class="form-group">
    <label for="username" class="col-md-4 control-label">Login:</label>
    <div class="col-md-8">
        <?php echo Form::input('username', NULL, array('class'=>'form-control', 'id'=>'username')).'';
        if(isset($errors['username'])) echo '<p class="bg-danger"><span style="color: #ff0000">'.$errors['username'].'</span></p>';?>
    </div>
</div>
    <div class="form-group">
    <label for="nick" class="col-md-4 control-label">Nick:</label>
    <div class="col-md-8">
        <?php echo Form::input('nick', NULL, array('class'=>'form-control', 'id'=>'nick')).'';
        if(isset($errors['nick'])) echo '<p class="bg-danger"><span style="color: #ff0000">'.$errors['nick'].'</span></p>';?>
    </div>
</div>
<div class="form-group">
    <label for="email" class="col-md-4 control-label">E-mail:</label>
    <div class="col-md-8">
        <?php echo Form::input('email', NULL, array('class'=>'form-control', 'id'=>'email')).'';
        if(isset($errors['email'])) echo '<p class="bg-danger"><span style="color: #ff0000">'.$errors['email'].'</span></p>';?>
    </div>
</div>
<div class="form-group">
    <label for="password" class="col-md-4 control-label">Hasło:</label>
    <div class="col-md-8">
        <?php echo Form::password('password', NULL, array('class'=>'form-control', 'id'=>'password')).'';
        if(isset($errors['password'])) echo '<p class="bg-danger"><span style="color: #ff0000">'.$errors['password'].'</span></p>';?>
    </div>
</div>
<div class="form-group">
    <label for="re_pass" class="col-md-4 control-label">Powtórz hasło:</label>
    <div class="col-md-8">
        <?php echo Form::password('re_password', NULL, array('class'=>'form-control', 'id'=>'re_pass')).'';
        if(isset($errors['re_password'])) echo '<p class="bg-danger"><span style="color: #ff0000">'.$errors['re_password'].'</span>';?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo Form::button('submit', 'Zarejestruj', array('class'=>'btn btn-default')).'';?>
    </div>
</div>
</div>
</div>
<?php echo Form::close();?>
