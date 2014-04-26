<?php
/**
 * Author: Spirit-
 * Date: 21.04.14
 */
?>

<div class="col-md-6 col-md-offset-3">
    <div class="well">
        <form class="form-horizontal" action="" method="post">
            <div class="form-group">
                <label for="title" class="col-md-2 control-label">Tytuł:</label>
                <div class="col-md-10">
                    <input type="text" id="title" name="title" class="form-control" value="<?php echo $article->title?>"/>
                </div>
            </div>
            <div class="form-group">
                <label for="content" class="col-md-2 control-label">Treść:</label>
                <div class="col-md-10">
                    <textarea id="content" class="form-control" name="content" rows="5"><?php echo $article->content?></textarea>
                </div>
            </div>
            <button class="btn btn-default" type="submit">Publikuj</button>
        </form>
    </div>
</div>