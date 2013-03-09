<?php 
	defined('C5_EXECUTE') or die("Access Denied.");
	$this->inc('elements/header.php'); 
	?>
		 
<div class="main">
	<div class="container">
			<div class="three columns">
				<div class="widget menu">
				<?php
					$bt = BlockType::getByHandle('autonav');
					$bt->controller->displayPages = 'second_level';  
					$bt->controller->orderBy = 'display_asc';
					$bt->render('templates/sub_menu');
				?>
				</div>	
			</div>
			<div class="nine columns">

			  <div class="breadcrumb clearfix">
			  	<?php
						$bt = BlockType::getByHandle('autonav');
						$bt->controller->displayPages = 'top_level';
						$bt->controller->orderBy = 'display_asc';
						$bt->controller->displaySubPages = 'relevant_breadcrumb'; 
						$bt->controller->displaySubPageLevels = 'enough';
						$bt->render('templates/my_breadcrumb');
			  	?>
	    	</div>
				<article>
					<h2><?php 
						$a = new Area('H2');
						$a->display($c);
					?></h2>
					<div class="snippet">
						<?php 
							$a = new Area('Snippet');
							$a->display($c);
						?>					
					</div>
					<?php 
						$a = new Area('Main');
						$a->display($c);
					?>
				</article>	
			</div>
			
			<div class="four columns">	
				<aside>					
					<div class="widget donate">
						<a href="#"><span>Donate Now <i class="icon-chevron-right"></i></span> Visit our JustGiving Page</a>
					</div>
					<div class="widget helpline">
						<a href="/about/helpline">
							<span><i class="icon-phone"></i> Carer Helpline</span>
							<span class="tel">01234 456 890</span>
						</a>
					</div>
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
				</aside>
			</div>
	</div>   <!-- // strap -->	
</div>

<?php  $this->inc('elements/footer.php'); ?>