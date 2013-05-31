<?php /* Footer section with social sharing links */ ?>
			<div class="post-info post-footer">
				<div class="social-footer social-googleplus">
					<div class="g-plusone" data-href="<?php the_permalink(); ?>" data-recommendations="false" data-size="medium"></div>
				</div>
				<div class="social-footer social-twitter">
					<a class="twitter-share-button" href="https://twitter.com/share" data-counturl="<?php the_permalink(); ?>"
						data-dnt="true" data-text="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>"
						data-via="GothamBeacon"></a>
				</div>
				<div class="social-footer social-facebook">
					<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-send="false" data-show-faces="false" data-width="90"></div>
				</div>
			</div>