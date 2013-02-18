<?php 
	defined('C5_EXECUTE') or die("Access Denied.");
	$this->inc('elements/header.php'); 
	?>
		 

	<style>
		
		article h1{
			padding-top: 30px;
		}

	</style>	 

	<header>
		<div class="container header">
			<div class="sixteen columns">
				<h1>
					<a href="<?php echo DIR_REL?>/"><?php 
						$block = Block::getByName('My_Site_Name');
						if( $block && $block->bID ) $block->display();  
						else echo SITE;
					?></a>
				</h1>
				<div class="main-menu clearfix">
					<?php 
						$a = new Area('Header Nav');
						$a->display($c);
					?>
				</div>  <!-- // main menu -->
			</div>
		</div>
	</header>  <!-- // header -->

	<hr />

	<div class="container">

		<div class="sixteen columns">

		  <div class="breadcrumb">
	      <?php 			
	      	$ahh = new Area('Header');
	      	$ahh->display($c);			
	      ?>	
    	</div>

		</div>

		<div class="sixteen columns">

			<article>

				<?php 
					$a = new Area('Main');
					$a->display($c);
				?>

			</article>	

		</div>

	</div>   <!-- // strap -->	

<?php  $this->inc('elements/footer.php'); ?>