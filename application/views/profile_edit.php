<?php
/**
 * User: BrSpirit
 * Date: 07.02.14
 */
if($success=Cookie::get('success'))
{
    echo '<span style="color: green">'.$success.'</span>';
}
if($success=Cookie::get('error'))
{
    echo '<span style="color: red">'.$success.'</span>';
}
if(Cookie::get('profile_edit'))
{
   $cookie=unserialize(Cookie::get('profile_edit'));
    $date[0]=$cookie['year'];
    $date[1]=$cookie['month'];
    $date[2]=$cookie['day'];
}
else
{
    $date=explode('-', $user->birthdate);
    $cookie = array(
        'email' => $user->email,
        'nick' => $user->nick,
        'birthdate' => $user->birthdate,
        'signature' => $user->signature,
        'first_name' => $user->first_name,
        'last_name' => $user->last_name,
        'city' => $user->city
    );
}
//var_dump(Auth::instance()->get_user());
echo Form::open('', array('method'=>'post'));?>
    <label>Nick:</label>
<?php echo Form::input('nick', $cookie['nick']).'<br />';
if(isset($errors['nick'])) echo '<span style="color: #ff0000">'.$errors['nick'].'</span><br />';?>
    <label>Imię:</label>
<?php echo Form::input('first_name', $cookie['first_name']).'<br />';
if(isset($errors['first_name'])) echo '<span style="color: #ff0000">'.$errors['first_name'].'</span><br />';?>
    <label>Nazwisko:</label>
<?php echo Form::input('last_name', $cookie['last_name']).'<br />';
if(isset($errors['last_name'])) echo '<span style="color: #ff0000">'.$errors['last_name'].'</span><br />';?>
    <label>E-mail:</label>
<?php echo Form::input('email', $cookie['email']).'<br />';
if(isset($errors['email'])) echo '<span style="color: #ff0000">'.$errors['email'].'</span><br />';?>
    <label>Data urodzin:</label>
<?php echo Form::select('year', Date::years('1990', date('Y')), $date[0]).'-'.Form::select('month', Date::months(), $date[1]).'-'.Form::select('day', Date::days($date[1]), $date[2]).'<br />';
//if(isset($errors['password'])) echo '<span style="color: #ff0000">'.$errors['password'].'</span><br />';?>
    <label>Miasto:</label>
<?php echo Form::input('city', $cookie['city']).'<br />';
if(isset($errors['city'])) echo '<span style="color: #ff0000">'.$errors['city'].'</span><br />';?>
    <label>Sygnatura:</label>
<?php echo Form::textarea('signature', $cookie['signature'], array('resize'=>'none', 'height'=>'300px', 'width'=>'100%')).'<br />';
if(isset($errors['city'])) echo '<span style="color: #ff0000">'.$errors['re_password'].'</span><br />';?>

    <br />
<?php echo Form::submit('submit', 'Edytuj').'<br />';?>
<?php echo Form::close();?>
<?php Cookie::delete('profile_edit');?>