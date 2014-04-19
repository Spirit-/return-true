<?php
/**
 * User:CheQ
 */

 
foreach($categories as $kategoria): // specjalnie Ci dałem polską zmienną zeby Cię wkurzyć?> 
	<div>    
		<div class = "categories">
				<h2>
					<? echo $kategoria->name; ?>
				</h2>
				<h4>
					<? echo $kategoria->description; ?>
				</h4>
		</div>
		
	</div>
<?php endforeach?>
