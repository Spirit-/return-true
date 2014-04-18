<div class="col-md-6 col-md-offset-3">
    <div class="well">
        <?php
            echo Form::open("", array('method'=>'post', 'class'=>'form-horizontal'));
            if(isset($errors['account'])) echo '<p class="bg-danger"><span style="color: #ff0000">'.$errors['account'].'</span></p>';?>
        <div class="form-group">
            <label for="login" class="col-md-2 control-label">Login:</label>
            <div class="col-md-10">
                <?php echo Form::input('login', NULL, array('id'=>'login', 'class'=>'form-control'));
                    if(isset($errors['login'])) echo '<p class="bg-danger"><span style="color: #ff0000">'.$errors['login'].'</span></p>';?>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-md-2 control-label">Hasło:</label>
            <div class="col-md-10">
                <?php echo Form::password('password', NULL, array('id'=>'password', 'class'=>'form-control'));
                    if(isset($errors['password'])) echo '<p class="bg-danger"><span style="color: #ff0000">'.$errors['password'].'</span></p>';?>
            </div>
        </div>
        <div class="form-group">
            <?php echo Form::button('submit', 'Zaloguj', array('class'=>'btn btn-default'));?>
        </div>
            <?php echo Form::close();?>
            <a class="btn btn-default" href="/auth/register">Zarejestruj się</a>
        </div>
</div>