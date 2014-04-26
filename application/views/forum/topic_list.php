<?php
/**
 * Created by PhpStorm.
 * User: cheq
 * Date: 23.04.14
 * Time: 21:40
 */
foreach($topics as $t)
{
    ?>
    <div>
        <a href = "/forum/thread/<?php echo $t->id; ?>"><?php echo $t->title; ?></a>
    </div>
<?php
}
?>