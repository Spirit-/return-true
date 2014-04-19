<?php
/**
 * Author: Spirit-
 * Date: 19.04.14
 */?>
<div class="well">
    <div class="panel panel-default">
        <div class="panel-heading text-left">
            <strong><?php echo $article->title?></strong>
        </div>
        <div class="panel-body text-left">
            <?php echo nl2br($article->content)?>
        </div>
        <div class="panel-footer text-left">
            <h6>
                ~<strong><?php echo $article->user->username?></strong><br />
                <small>Data: <?php echo $article->date?></small>
            </h6>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-right">
            <?php if($user->id == $article->author_id):?>
            <div class="btn-group text-right">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Akcje autora <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>
            <?php endif?>
            <?php if($moderator):?>
            <div class="btn-group text-right">
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    Akcje Moderatora <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>
            <?php endif?>
            <?php if($admin):?>
            <div class="btn-group text-right">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                    Akcje admina <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>
            <?php endif?>
        </div>
    </div>
</div>
<div class="panel panel-default">
<?php if($posts!=NULL):?>
<?php foreach($posts as $post):?>

    <div class="panel-heading text-left">
        <h5>
            <strong><?php echo $post->user->username?></strong><br />
            <small><?php echo $post->date?></small>
        </h5>
    </div>
    <div class="panel-body text-left">
        <?php echo $post->content?>
    </div>
<?php endforeach?>
<?php else:?>
    <div class="panel-body">
        Brak komentarzy do tego artykułu
    </div>
<?endif?>
</div>
<div class="col-md-10 col-md-offset-1">
    <div class="well text-left">
        <h5><strong>Dodaj komentarz</strong></h5>
        <div class="clearfix"></div>
        <form action="" method="post" class="form-horizontal">
            <div class="form-group">
                <textarea class="form-control" name="content" rows="3" placeholder="Treść"></textarea>
            </div>
            <button class="btn btn-default" type="submit">Wyślij</button>
        </form>
    </div>
</div>