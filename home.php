<?php 
	defined('C5_EXECUTE') or die("Access Denied.");
	$this->inc('elements/header.php'); 
	?>
		 
<div class="hero">
	<img src="/themes/buttercup/images/buttercups.jpg">
</div>   <!-- // hero -->		 

<div class="main">
	<article>
		<div class="container strap">
			<div class="sixteen columns">
	      <?php 			
	      	$ahh = new Area('Header');
	      	$ahh->display($c);			
	      ?>	
			</div>
		</div>   <!-- // strap -->
		<div class="container">
			<div class="sixteen columns">
				<?php 
					$a = new Area('Main');
					$a->display($c);
				?>
			</div>
		</div> <!-- // main -->	
		<div class="container">
			<div class="one-third column">
				<?php 
					$a = new Area('Teaser One');
					$a->display($c);
				?>			
			</div>
			<div class="one-third column">
				<?php 
					$a = new Area('Teaser Two');
					$a->display($c);
				?>
			</div>
			<div class="one-third column">
				<?php 
					$a = new Area('Teaser Three');
					$a->display($c);
				?>
			</div>
		</div> <!-- // teasers -->
	</article>	
</div>


		<?php 
			// $as = new Area('Sidebar');
			// $as->display($c);
		?>		

<?php  $this->inc('elements/footer.php'); ?>