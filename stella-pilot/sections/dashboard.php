			<?php global $db; ?>
			<div class="container">
				<div class="breadcrumbs"><a href="./">Home</a> /</div>
				<!-- DASHBOARD -->
				<h1 class="headline">Dashboard</h1>
				<!-- <p class="description">Description</p> -->
		
				<div class="dashboard row">
					
					<!-- DASHBOARD -->
					<div class="col-md-7">
						
						<?php
						/* NOTIFICATIONS *****************************/
							if ($settings['show_notifications']) : ?>
						<div class="section">
							<h3>Notifications</h3>
							<?php //alerts();
								//global $db;
								for ($i=0; $i<count($db['alerts']); $i++) {
									$alert = $db['alerts'][$i]; 
									?>
									<div class="note-item bg-<?php echo($alert['type']); ?>">
										<button type="button" class="close" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<?php echo($alert['title']); ?> <small><?php echo(pretty($alert['timestamp'])); ?></small>
									</div>
									<?php
								}
							?>
						</div>
						<?php endif; ?>
						
						<div class="section">
							<h3>Ongoing Experiences</h3>
							<?php //dashboard(3); 
								//global $db;
								$n = 3;
								$n = ($n>count($db['experiences'])) ? count($db['experiences']) : $n;
								for ($i=0; $i<$n; $i++) {
									$course = $db['experiences'][$i]; 
									?>
									<div id="dash-item-<?php echo($i); ?>" class="dash-item <?php if (($i+1)==$n) echo('border-bottom'); ?> row">
										<button class="dash-button btn-button pull-right">Resume Experience</button>
										<h4 class="dash-name"><a class="exp-name-link" href="#"><?php echo($course['name']); ?></a></h4>
										<p class="dash-meta"><strong>33% Completed</strong> / 12 Remaining Lessons</p>
										<p class="dash-description"><?php echo($course['description']); ?></p>
									</div>
								<?php
								}
							?>
						</div>
					
						<div class="section">
							<h3>Coming Experiences</h3>
							<?php //dashboard(2);
								//global $db;
								$n = 2;
								$n = ($n>count($db['experiences'])) ? count($db['experiences']) : $n;
								for ($i=0; $i<$n; $i++) {
									$course = $db['experiences'][$i]; 
									?>
									<div id="dash-item-<?php echo($i); ?>" class="dash-item <?php if (($i+1)==$n) echo('border-bottom'); ?> row">
										<button class="dash-button btn-button pull-right">Resume Experience</button>
										<h4 class="dash-name"><a class="exp-name-link" href="#"><?php echo($course['name']); ?></a></h4>
										<p class="dash-meta"><strong>33% Completed</strong> / 12 Remaining Lessons</p>
										<p class="dash-description"><?php echo($course['description']); ?></p>
									</div>
								<?php
								}
							?>
						</div>
					</div>
					
					<!-- SIDEBAR -->
					<div class="sidebar sidebar-light-grey col-md-4 col-md-push-1">
						
						<div id="projects" class="section">
							<h4>Projects</h4>
							<?php
							$n = 9999;
							$n = ($n>count($db['projects'])) ? count($db['projects']) : $n;
							foreach ($db['projects'] as $project) {
							?>
							<div class="proj-item">
								<a class="proj-title" href="./?id=project&amp;name=<?php echo($project['pid']); ?>"><?php echo($project['pid']); ?></a>
								<p class="proj-desc"><?php echo($project['description']); ?></p>
							</div>
							<?php } ?>
						</div>
						
						<?php
						/* UPDATES *****************************/
							if ($settings['show_updates']) : ?>
						<div class="section">
							<h4>Updates</h4>
							<?php //conversations(3);
								//global $db;
								$n = 3;
								$n = ($n>count($db['conversations'])) ? count($db['conversations']) : $n;
								for ($i=0; $i<$n; $i++) {
									$conversation = $db['conversations'][$i]; 
									?>
									<div id="conv-item-<?php echo($i); ?>" class="conv-item clickable <?php if (($i+1)==$n) echo('border-bottom'); ?> row">
										<div class="col-md-2">
											<img class="conv-avatar img-circle" src="lib/img/?36x36" alt="User Avatar">
										</div>
										<div class="col-md-10">
											<h6 class="conv-thread"><a href="#"><?php echo($conversation['thread']); ?></a></h6>
											<p class="conv-message"><strong><?php echo($conversation['user']); ?></strong> <?php echo($conversation['comment']); ?> <span class="meta"><?php echo(pretty($conversation['timestamp'])); ?> | <a class="conv-reply" href="#">Reply</a></span></p>
										</div>
									</div>
									<?php
								}
							
							?>
							<button class="btn btn-top">View all updates</button>
						</div>
						<?php endif; ?>
						
						<?php
						/* JOBS *****************************/
							if ($settings['show_jobs']) : ?>
						<div class="section">
							<h4>Recommended Jobs</h4>
							<?php //jobs(3);
								global $db;
								$n = 3;
								$n = ($n>count($db['jobs'])) ? count($db['jobs']) : $n;
								for ($i=0; $i<$n; $i++) {
									$job = $db['jobs'][$i]; 
									?>
									<div id="job-item-<?php echo($i); ?>" class="job-item clickable <?php if (($i+1)==$n) echo('border-bottom'); ?> row">
										<div class="col-md-2">
											<img class="job-logo img-rectangle" src="lib/img/?36x36" alt="Employer Logo">
										</div>
										<div class="col-md-10">
											<p class="job-desc"><a href="#"><?php echo($job['company']); ?></a> is looking for a</p>
											<h6 class="job-title"><a href="#"><?php echo($job['title']); ?></a></h6>
											<p class="job-desc">in <strong><?php echo($job['location']); ?></strong> (3 miles)</p>
										</div>
									</div>
									<?php
								}
							?>
						</div>
						<?php endif; ?>
						
					</div>
						
				</div><!-- .dashboard -->
				
			</div><!-- .container -->