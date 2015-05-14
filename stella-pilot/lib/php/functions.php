<?php


	/* EXPERIENCE ITEMS ********************************************** */
	function experiences($n=9999) {
		global $db;
		$n = ($n>count($db['experiences'])) ? count($db['experiences']) : $n;
		for ($i=0; $i<$n; $i++) {
			$course = $db['experiences'][$i]; 
			?>
			<div id="exp-item-<?php echo($i); ?>" class="exp-item col-sm-6 col-md-4 col-xl-3">
				<style>
					.exp-image-bg {
						background:url(lib/img/?450x100) no-repeat center center;
						-webkit-background-size:cover;
						-moz-background-size:cover;
						-o-background-size:cover;
						background-size:cover;
					}
				</style>
				<div class="exp-box">
					<div class="exp-image-box exp-image-bg">
						<!-- <img class="exp-image img-responsive" src="lib/img/?450x100" alt="Experience Image"> -->
					</div>
					<h3 class="exp-name"><a class="exp-name-link" href="#"><?php echo($course['name']); ?></a></h3>
					<p class="exp-meta">Starts August 18, 2015</p>
					<p class="exp-description"><?php echo($course['description']); ?></p>
					<div class="exp-instructor">
						<img class="exp-instructor-icon img-responsive img-circle" src="lib/img/?36x36">
						<h4 class="exp-instructor-name"><?php echo($course['instructor']); ?></h4>
					</div>
					<button class="btn-button">Learn More</button>
				</div>
			</div>
		<?php
		}
	}



	/* SPACE ITEMS ********************************************** */
	function spaces($n=9999) {
		global $db;
		$n = ($n>count($db['spaces'])) ? count($db['spaces']) : $n;
		for ($i=0; $i<$n; $i++) {
			$space = $db['spaces'][$i];
			?>
			<div id="space-item-<?php echo($i); ?>" class="space-item <?php if (($i+1)==$n) echo('border-bottom'); ?> row">
				<div class="space-title col-md-3">
					<h4><a href="./?id=space&name=<?php echo(str_replace(' ','+',$space['name'])); ?>"><?php echo($space['name']); ?></a></h4>
				</div>
				<div class="space-data col-md-4">
					<p class="space-meta"><?php echo($space['members']); ?> Members / <?php echo($space['discussions']); ?> Discussions</p>
					<p class="space-comment"><strong><?php echo($space['recent_post']['username']); ?></strong> <?php echo($space['recent_post']['content']); ?> <small><?php echo(pretty($space['recent_post']['timestamp'])); ?></small></p>
				</div>
				<div class="col-md-1"></div>
				<div class="space-people col-md-4">
					<span class="space-people-label col-xs-12">Recent Participants</span>
					<ul class="list-unstyled list-inline">
						<li><img class="img-circle" src="lib/img/?36x36"></li>
						<li><img class="img-circle" src="lib/img/?36x36"></li>
						<li><img class="img-circle" src="lib/img/?36x36"></li>
						<li><img class="img-circle" src="lib/img/?36x36"></li>
						<li><img class="img-circle" src="lib/img/?36x36"></li>
						<li><img class="img-circle" src="lib/img/?36x36"></li>
					</ul>
				</div>
			</div>
		<?php
		}
	}
	
	function space($parent,$n=9999) {
		global $db;
		$n = ($n>count($db['space'])) ? count($db['space']) : $n;
		for ($i=0; $i<$n; $i++) {
			$space = $db['space'][$i];
			?>
			<div id="space-item-<?php echo($i); ?>" class="space-item <?php if (($i+1)==$n) echo('border-bottom'); ?> row">
				<div class="space-title col-md-3">
					<h4><a href="./?id=thread&name=<?php echo(str_replace(' ','+',$space['name'])); ?>&parent=<?php echo(str_replace(' ','+',$parent)); ?>"><?php echo($space['name']); ?></a></h4>
					<p class="space-meta"><small>Started by <strong><?php echo($space['started_by']); ?></strong> <?php echo(pretty($space['time_created'])); ?></small></p>
				</div>
				<div class="space-data col-md-4">
					<p class="space-meta"><?php echo($space['members']); ?> Members / <?php echo($space['replies']); ?> Replies</p>
					<p class="space-comment"><strong><?php echo($space['recent_post']['username']); ?></strong> <?php echo($space['recent_post']['content']); ?> <small><?php echo(pretty($space['recent_post']['timestamp'])); ?></small></p>
				</div>
				<div class="col-md-1"></div>
				<div class="space-people col-md-4">
					<span class="space-people-label col-xs-12">Recent Participants</span>
					<ul class="list-unstyled list-inline">
						<li><img class="img-circle" src="lib/img/?36x36"></li>
						<li><img class="img-circle" src="lib/img/?36x36"></li>
						<li><img class="img-circle" src="lib/img/?36x36"></li>
						<li><img class="img-circle" src="lib/img/?36x36"></li>
						<li><img class="img-circle" src="lib/img/?36x36"></li>
						<li><img class="img-circle" src="lib/img/?36x36"></li>
					</ul>
				</div>
			</div>
		<?php
		}
	}
	
	function thread($n=9999) {
		global $db;
		$n = ($n>count($db['thread'])) ? count($db['thread']) : $n;
		for ($i=0; $i<$n; $i++) {
			$thread = $db['thread'][$i];
			$nn = count($thread['attachments']);
			?>
			<div id="thread-item-<?php echo($i); ?>" class="thread-item <?php if (($i+1)==$n) echo('border-bottom'); ?> <?php if($i===0) echo('first-reply'); ?> row">
				<div class="thread-content col-md-12">
					<div class="thread-content-header">
						<a class="thread-avatar" href="#"><img class="img-circle" src="<?php echo($thread['avatar']); ?>"></a> <a href="#"><?php echo($thread['username']); ?></a> <small class="space-meta"> <?php echo(pretty($thread['timestamp'])); ?></small>
					</div>
					<p class="thread-comment <?php if ($nn>0) echo('col-md-8'); ?>"><?php echo($thread['content']); ?></p>
					<?php
					if ($nn>0) { ?>
						<div class="col-md-4">
							<p class="thread-subtitle">Attachments</p>
							<ul class="thread-attachments pull-left">
							<?php
							for ($j=0; $j<$nn; $j++) {
								$attach = $thread['attachments'][$j]; ?>
								<li class="pull-left">
									<span class="attachment-icon pull-left">
										<a href="#"><img class="img-thumbnail" src="<?php echo($attach['icon']); ?>"></a>
									</span>
									<span class="attachment-filename pull-left">
										<strong><a href="#"><?php echo($attach['name']); ?></a></strong><br/>
										<small><a href="#"><?php echo($attach['filename']); ?></a></small>
									</span>
								</li>
							<?php } ?>
							</ul>
						</div>
					<?php }?>
				</div>
			</div>
		<?php
		}
	}
	
	function project($n=9999) {
		global $db;
		$n = ($n>count($db['projects'])) ? count($db['projects']) : $n;
		for ($i=0; $i<$n; $i++) {
			$project = $db['projects'][$i];
			//$nn = count($thread['attachments']);
			?>
			<div id="<?php echo($project['id']); ?>" class="project-item <?php if (($i+1)==$n) echo('border-bottom'); ?> <?php if($i===0) echo('first-reply'); ?> row">
				<div class="project-content col-md-12">
					<div class="project-content-header">
						<a class="project-avatar" href="#"><img class="img-circle" src="<?php echo($project['avatar']); ?>"></a> <a href="#"><?php echo($project['username']); ?></a> <small class="space-meta"> <?php echo(pretty($project['timestamp'])); ?></small>
					</div>
					<p class="project-comment">Comment: <?php echo($project['wiki']); ?></p>
					<!-- sidebar -->
					<div class="col-md-4">
						<h3>Sidebar</h3>
					</div>
				</div>
			</div>
		<?php
		}
	}



	/* DASHBOARD ITEMS ********************************************** */
	function dashboard($n=9999) {
		global $db;
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
	}
	
	
	
	/* CONVERSATION ITEM FOR DASHBOARD ********************************************** */
	function conversations($n=9999) {
		global $db;
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
	}
	
	
	
	/* JOBS FOR DASHBOARD ********************************************** */
	function jobs($n=9999) {
		global $db;
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
	}
	
	function alerts($n=9999) {
		global $db;
		$n = ($n>count($db['alerts'])) ? count($db['alerts']) : $n;
		for ($i=0; $i<$n; $i++) {
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
	}
	
	/* HELPER FUNCTIONS */
	
	function wikify($c) {
		$html = str_replace('[','<',$c);
		$html = str_replace(']','>',$html);
		echo('<div class="wiki-html">'.$html.'</div>');
	}
	
	
	function pretty($ptime)
	{
	    $etime = time() - strtotime($ptime);
		$future = FALSE;

	    if ($etime < 1)
	    {
			$etime = strtotime($ptime) - time();//'0 seconds';
			$future = TRUE;
	    }

	    $a = array( 365 * 24 * 60 * 60  =>  'year',
	                 30 * 24 * 60 * 60  =>  'month',
	                      24 * 60 * 60  =>  'day',
	                           60 * 60  =>  'hour',
	                                60  =>  'minute',
	                                 1  =>  'second'
	                );
	    $a_plural = array( 'year'   => 'years',
	                       'month'  => 'months',
	                       'day'    => 'days',
	                       'hour'   => 'hours',
	                       'minute' => 'minutes',
	                       'second' => 'seconds'
	                );
		
		$ago = ($future) ? '' : ' ago';
		$in = ($future) ? 'in ' : '';
		
	    foreach ($a as $secs => $str)
	    {
	        $d = $etime / $secs;
	        if ($d >= 1)
	        {
	            $r = round($d);
	            return $in . $r . ' ' . ($r > 1 ? $a_plural[$str] : $str) . $ago;
	        }
	    }
	}
	
	function txt($length)
	{
		global $lipsum;
	    
		if(strlen($lipsum) > $length) {
	        $text = substr($lipsum, 0, strpos($lipsum, ' ', $length));
	    }
	    
		echo $text.'.';
	}
?>