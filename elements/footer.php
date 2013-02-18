<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

		<footer>
			<div class="container">
				<div class="four columns">
					<h5>Site map</h5>
					<ul>
						<?php 

							$bt = BlockType::getByHandle('autonav');
							$bt->controller->displayPages = 'top';
							$bt->controller->orderBy = 'display_asc';
							$bt->render('templates/footer_menu');

							$u = new User();
							
							if (!$u->isRegistered()) {?> 
								<li><i class="icon-angle-right"></i>
									<a href="<?php echo $this->url('/login')?>">Login</a>
								</li>
						<?php  } ?>
					</ul>
				</div>
				<div class="four columns">
					<h5>Connect</h5>
					<ul>
						<li><i class="icon-phone-sign"></i> 01234 567 890</li>
						<li><i class="icon-twitter-sign"></i> <a href="#">Twitter</a></li>
						<li><i class="icon-facebook-sign"></i> <a href="#">Facebook</a></li>
					</ul>
				</div>
			</div>
		</footer>
		<?php  Loader::element('footer_required'); ?>
		
		<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4dbf29307cc266c2"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript">

			$('.mobile-menu-toggle').on('click', function(){
				$('.mobile-menu').slideToggle();
			});

		</script>
	</body>
</html>