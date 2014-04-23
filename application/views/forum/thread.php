<h2>
    <?php echo $topic_info->title; ?>
</h2>
<div>
    <?php echo $first_post->content; ?>
</div>
<?php
    foreach($posts as $p)
    {
        if($p->first == 0 ) // bo już go wcześniej napisałem
        {
        ?>
            <div>
                <h6>napisał <?php echo $p->author_id;?></h6>
                <pre>
                    <?php echo $p->content;?>
                </pre>
            </div>
        <?
        }
    }
?>