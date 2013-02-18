<?php 
	defined('C5_EXECUTE') or die("Access Denied.");
	$this->inc('elements/header.php'); 
	?>
		 
<div class="hero">

	<div class="container">
		<div class="eight columns">
			<div class="lead">
				<?php 
					$a = new Area('Main');
					$a->display($c);
				?>
			</div>
		</div>
		<div class="eight columns">
			<div class="widget donate">
				<a href="#"><span>Donate Now <i class="icon-chevron-right"></i></span> Visit our JustGiving Page</a>
			</div>
			<div class="widget helpline">
				<span><i class="icon-phone"></i> Carer Helpline</span>
				<span class="tel">01234 456 890</span>
			</div>
		</div>
	</div>
	
</div>   <!-- // hero -->		 

<div class="main">
	<article>
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
				<div class="widget share">
					<h4>Share.</h4>
					<!-- AddThis Button BEGIN -->
					<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
						<a class="addthis_button_preferred_1"></a>
						<a class="addthis_button_preferred_3"></a>
						<a class="addthis_button_preferred_4"></a>
						<a class="addthis_button_preferred_2"></a>
					</div>				
					<!-- AddThis Button END -->
				</div>			
			</div>
		</div> <!-- // teasers -->
	</article>	
</div>


		<?php 
			// $as = new Area('Sidebar');
			// $as->display($c);
		?>		

<?php  $this->inc('elements/footer.php'); ?>