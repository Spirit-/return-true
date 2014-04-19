<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="pl" />
<!--  <meta name="Keywords" content="s�owa, kluczowe, oddzielone, przecinkami" />-->
<!--  <meta name="Description" content="kr�tki opis zawarto�ci strony" />-->
  <meta name="Robots" content="none" />
  <meta name="Author" content="flankerds.com" />
  <link rel="stylesheet" href="<?php echo URL::base()?>media/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL::base()?>media/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL::base()?>media/css/bootstrap-theme.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo URL::base()?>media/js/bootstrap.js"></script>
  <title><?php echo $title?></title>
</head>

<body>



<nav class="navbar navbar-fixet-top navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="">Return-True.pl</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="/">Strona Główna</a></li>
          <li class="disabled"><a href="#">Inna Podstrona</a></li>
          <li class="disabled"><a href="#">Inna Podstrona</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li>
            <?php if(Auth::instance()->logged_in()):?>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Zalogowany jako <b><?php echo Auth::instance()->get_user()->username?></b><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="/user/edit">Edycja profilu</a></li>
                    <li class="divider"></li>
                    <li><a href="/auth/logout">Wyloguj</a></li>

                </ul>
            </li>
            <?php else:?>
                <form class="navbar-form navbar-right" action="/auth" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="login" name="login">
<!--                        <span class="input-group-addon glyphicon glyphicon-lock"></span>-->
                        <input type="password" class="form-control" placeholder="hasło" name="password">
                    </div>
                    <button type="submit" class="btn btn-default">Zaloguj</button>
                </form>
                <li><a href="/auth/register">Rejestracja</a></li>
            <?php endif;?>
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="well">
                <ul class="nav nav-pills nav-stacked">
                <li class="disabled"><a href="#">Lewe Menu 1</a></li>
                <li class="disabled"><a href="#">Lewe Menu 2</a></li>
                <li class="disabled"><a href="#">Lewe Menu 3</a></li>
                <li class="disabled"><a href="#">Lewe Menu 4</a></li>
                <li class="disabled"><a href="#">Lewe Menu 5</a></li>
                </ul>
            </div>
        </div>


        <div class="col-md-10">
            <?php if(Cookie::get('success'))
            {
                echo "<span style='color: green'>".Cookie::get('success')."</span>";
                Cookie::delete('success');
            }
            if(Cookie::get('error'))
            {
                echo "<span style='color: red'>".Cookie::get('error')."</span>";
                Cookie::delete('error');
            }?>
             <?php echo $content?>

        </div>

    </div>
    <div class="clearfix"><br /></div>
    <div class="row">
        <div class="col-md-12">
            <div class="well">Copyright &copy; Return-True.pl</div>
        </div>
    </div>


</div>
</body>
</html>
