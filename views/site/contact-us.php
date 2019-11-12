<?php
	use yii\bootstrap\ActiveForm;
	use yii\helpers\Html;
?>	
<?php $this->title = "Контакты"; ?>
<div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Адреса <strong>магазинов</strong></h2> 
					<div>   			    				    				
						<?php
		                	foreach ($model as $yel) {
		                        echo "<div>";
		                        echo '<p>'.$yel->id.'.'.$yel->name.'</p>';             			
		                        echo "</div>"; 
		                    }  
		                ?>
                	</div>
				</div>			 		
			</div>    	

    	</div>	
    </div><!--/#contact-page-->