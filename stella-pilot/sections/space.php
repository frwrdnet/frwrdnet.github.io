			<?php
				$name = (isset($_GET['name'])) ? $_GET['name'] : '[Space Name]';
			?>

			<div class="container">
				<div class="breadcrumbs"><a href="./">Home</a> / <a href="./?id=spaces">Spaces</a> /</div>
				<!-- SPACES -->
				<h1 class="headline"><?php echo(urldecode($name)); ?></h1>
				<p class="description">Threads</p>
				
				<div class="spaces row">
					<div class="col-xs-12">
						<?php space($name,5); ?>
					</div>
				</div>
				
			</div><!-- container -->