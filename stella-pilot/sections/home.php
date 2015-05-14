		<!-- HOME -->
		
		<div class="blade white">
			<div class="section container">
				<h1 class="headline"><?php echo($db['stella']['title']); ?></h1>
				<p class="description dek"><?php txt(300); //echo($db['stella']['description']); ?></p>
			</div><!-- .container -->
		</div><!-- .blade -->
			
		<div class="blade grey">
			<div class="section container">
				<h2>Experiences</h2>
				<p class="description-box"><?php echo($db['experiences']['description']); ?></p>
				<div class="row">
					<?php experiences(3); ?>
				</div>
				<button class="btn-button btn-lg center-block btn-wide btn-view-all">View All Experiences</button>
			</div><!-- .container -->
		</div><!-- .blade -->
		
		<div class="blade grey">
			<div class="section container">
				<h2>Spaces</h2>
				<p class="description-box"><?php echo($db['spaces']['description']); ?></p>
				<div class="row nar-row">
					<?php spaces(3); ?>
				</div>
				<button class="btn-button btn-lg center-block btn-wide btn-view-all">View All Spaces</button>
			</div><!-- .container -->
		</div><!-- .blade -->
		
		<div class="blade blue center">
			<div class="section container">
				<p class="description-box dek"><?php txt(100); ?></p>
				<button class="btn-button btn-lg center-block btn-wide btn-view-all">Enroll Now</button>
			</div><!-- .container -->
		</div><!-- .blade -->
			
		