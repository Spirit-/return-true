<?php
/**
 * User:CheQ
 */

 
foreach($categories as $c):
    if(!$c->is_child())
    {
    ?>
	<div>    
		<div class = "well categories">
            <a href = "#"> <? echo $c->name; ?> </a>
                <div class = "well cat_child">
                    <?php
                        foreach($c->child->find_All() as $child)
                        {
                            // spokojnie dojebie się jakiś styl
                            ?>
                                <div>
                                   <h4>
                                       <a href = "forum/<?php echo $child->id ?>">
                                           <?php echo $child->name;?>
                                       </a>
                                   </h4>
                                    <h6>
                                        <?php echo $child->description;?>
                                    </h6>
                                </div>
                            <?
                        }
                    ?>
                </div>
		</div>
		
	</div>
<?php
    }
endforeach?>
