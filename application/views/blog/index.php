<?php
/**
 * User: BrSpirit
 * Date: 17-lut-2014
 */
foreach($articles as $article):?>
    <div class="row" style="text-align: left;">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel panel-heading">
                        <?php echo $article->title.'<br /><h5><small><b>'.$article->user->username.'</b>  Dnia: <b>'.substr($article->date, 0, 10).'</b> o godz. <b>'.substr($article->date, 11, 5).'</b></small></h5>';?>
                </div>
                <div class="panel panel-body">
                    <?php
                        if(strlen($article->content)<=128)
                            echo $article->content;
                        else
                            echo substr($article->content, 0, 128) . '... (Czytaj więcej<span class="glyphicon glyphicon-arrow-right"></span>)';
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php endforeach?>