				<div id="sidebar1" class="sidebar large-4 columns" role="complementary">

					<div class="panel">
				
						<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

							<?php dynamic_sidebar( 'sidebar1' ); ?>

						<?php else : ?>

							<!-- This content shows up if there are no widgets defined in the backend. -->
							
							<p>Please activate some Widgets.</p>

						<?php endif; ?>

					</div>

				</div>
