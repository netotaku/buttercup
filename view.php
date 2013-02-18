<?php 
	defined('C5_EXECUTE') or die("Access Denied.");
	$this->inc('elements/header.php'); 
	?>

	<div class="main">
		<div class="container">
			<div class="twelve columns">
			  <div class="breadcrumb">
		      <?php 			
		      	$ahh = new Area('Header');
		      	$ahh->display($c);			
		      ?>	
	    	</div>
			</div>
			<div class="twelve columns">
			  <div class="standout">
		      <?php 			
		      	$ahh = new Area('Standout');
		      	$ahh->display($c);			
		      ?>	
	    	</div>
			</div>		
			<div class="twelve columns">
				<article>
					<?php 
						$a = new Area('Main');
						$a->display($c);
					?>
				</article>	
			</div>
			<div class="four columns">	
				<aside>
					<?php 
						$as = new Area('Sidebar');
						$as->display($c);
					?>		
				</aside>
			</div>
		</div>   	
	</div>  <!-- // main -->

<?php  $this->inc('elements/footer.php'); ?>