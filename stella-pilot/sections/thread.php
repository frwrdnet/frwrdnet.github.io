			<?php
				$parent = (isset($_GET['parent'])) ? $_GET['parent'] : '[Parent Name]';
				$name = (isset($_GET['name'])) ? $_GET['name'] : '[Space Name]';
			?>
			
			<div class="container">
				<div class="breadcrumbs">
					<a href="./">Home</a> / 
					<a href="./?id=spaces&name=<?php echo(urlencode($parent)); ?>">Spaces</a> / 
					<a href="./?id=space&name=<?php echo(urlencode($parent)); ?>"><?php echo($parent); ?></a> /</div>
				<!-- SPACES -->
				<div class="row">
					<div class="col-md-8">
						<h1 class="headline"><?php echo(urldecode($name)); ?></h1>
						<p class="description">Conversation</p>
					</div>
					<div class="col-md-4">
						<div class="participants">
							<p>Participants</p>
							<?php //thread(6);
								global $db;
								$n = 9999;
								$n = ($n>count($db['thread'])) ? count($db['thread']) : $n;
								for ($i=0; $i<$n; $i++) {
									$thread = $db['thread'][$i];
									//$nn = count($thread['attachments']);
									?>
									<a class="thread-avatar" href="#"><img class="img-circle" src="<?php echo($thread['avatar']); ?>" alt="<?php echo($thread['username']); ?>"></a>
							<?php } ?>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="thread col-xs-12">
						<?php //thread(6);
							//global $db;
							//$n = 9999;
							//$n = ($n>count($db['thread'])) ? count($db['thread']) : $n;
							for ($i=0; $i<$n; $i++) {
								$thread = $db['thread'][$i];
								$nn = count($thread['attachments']);
								?>
								<div id="thread-item-<?php echo($i); ?>" class="thread-item <?php if (($i+1)==$n) echo('border-bottom'); ?> <?php if($i===0) echo('first-reply'); ?> row">
									<div class="thread-content col-md-12">
										<div class="thread-content-header">
											<a class="thread-avatar" href="#"><img class="img-circle <?php if ($i===0) echo('big-avatar'); ?>" src="<?php echo($thread['avatar']); ?>"></a> <a href="#"><?php echo($thread['username']); ?></a> <small class="space-meta"> <?php echo(pretty($thread['timestamp'])); ?></small>
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
						?>
						<div class="reply-area">
							<button class="reply-button btn-button btn-large">Leave a Reply</button>
							<div class="reply-form">
								<div class="thread-content-header">
									<a class="thread-avatar" href="#">
										<img class="img-circle" src="lib/img/?36x36">
									</a> 
									<a href="#">[Your Username]</a> 
									<small class="space-meta"> right now</small>
								</div>
								<form class="row">
									<div class="col-md-8">
										<div class="form-group">
											<textarea class="reply-field form-control" rows="3"></textarea>
										</div>
										<button type="submit" class="reply-submit-button btn btn-button btn-large">Post Reply</button>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<!-- <label for="replyAttachItem" class="reply-attach-doc-label">Attach Document</label> -->
											<p class="help-block reply-attach-doc-label">Attach a document to your reply (optional)</p>
											<input type="file" name="replyAttachItem" id="replyAttachItem" class="reply-attach-doc">
										</doc>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				
			</div><!-- container -->