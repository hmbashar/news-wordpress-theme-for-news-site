<?php global $redux_demo;?>

			<div class="footer">
					<?php
						if (function_exists('theme_default_mainmenu')) {
							wp_nav_menu(array('theme_location' => 'footer_menu', 'menu_class'=> 'footer_menu', 'fallback_cb' => 'theme_default_mainmenu'));
						}
						else {
							theme_default_mainmenu();
						}
					?>	
					<?php if ($redux_demo['copyright']) : ?>
						<p class="copyright_text"><?php echo $redux_demo['copyright'];?></p>
					<?php else : ?>
						<p class="copyright_text">Copyright &copy; <?php the_time('Y');?> The News Reporter Inc. All rights reserved. Theme designed by codingbank.com<br/>Reproduction in whole or in part in any form or medium without express written permission of The News Reporter Inc. is prohibited. The trade marks and images used in the design are the copyright of their respective owners. They are used only for display purpose.</p>
					<?php endif;?>
			</div>
		
		</div>
	</div>
	
		

		<?php wp_footer();?>
	</body>
</html>