<?php /* Header section with date/time and author information, and social sharing link */ ?>
			<div class="post-info">
				<div class="meta-info">
					<?php vint3_entry_meta(); ?>
				</div>
				<div class="social-share">
					<div class="g-plusone" data-href="<?php the_permalink(); ?>" data-recommendations="false" data-size="medium"></div>
				</div>
			</div>