<?php global $redux_demo;?>

				<div class="right_sidebar floatleft">
					<?php if ($redux_demo['subscribe-username']) : ?>
					<div class="single_sidebar newslatter_sidebar">
						<h3>Sign Up for Newsletter</h3>
						<p>Sign up to receive our free newsletters!</p>
						<form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=<?php echo $redux_demo['subscribe-username'];?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
							<div class="subscrption_box">
								<input type="email" name="email"/>
								<input type="hidden" value="<?php echo $redux_demo['subscribe-username'];?>" name="uri"/>
								<input type="hidden" name="loc" value="en_US"/>
								<input type="submit" value="Subscribe" />
								<p>We do not spam. We value your privacy!</p>
							</div>
						</form>
					</div>
					<?php endif;?>
					
					<?php dynamic_sidebar('right-sidebar');?>
	
				</div>
