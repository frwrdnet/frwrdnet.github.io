			<?php
				$name = (isset($_GET['name'])) ? $_GET['name'] : '[Project Name]';
				$project = $db['projects'][$name];
				$repo_code_link = $project['github_user'].'/'.$project['pid'];
				
				echo("<script>
				$(document).ready(function(){
					$('#repo-code').repo({ user: '".$project['github_user']."', name: '".$project['pid']."' });
					//$('#repo-gist').repo({ user: '".$project['github_user']."', name: '".$project['pid']."' });
				});
					</script>");
			?>
			
			<div class="container">
				<div class="breadcrumbs">
					<a href="./">Home</a> / 
					<a href="./?id=dashboard">Dashboard</a> / 
				<!-- PROJECT -->
				
				<div id="<?php echo($project['id']); ?>" class="project">
					<div class="project-header">
						<h1 class="headline"><?php echo($project['name']); ?> <small>Project</small></h1>
						<p class="description"><?php echo($project['description']); ?></p>
					</div>
					
					<div class="row">
						<?php //project(); ?>
					
						<div class="project-content col-md-7">
							
							<a id="wiki-edit-btn" class="btn btn-top btn-default btn-sm pull-right" href="#">Edit</a>
						
							<?php //echo(wikify($project['wiki']));
								$wiki_filename = "wiki/".$name.".txt";
								$wiki_file = fopen($wiki_filename, "r") or die("Unable to open file: ".$wiki_filename);
								$html = fread($wiki_file,filesize($wiki_filename));
								$html = str_replace('[','<',$html);
								$html = str_replace(']','>',$html);
								echo('<div id="wiki-html">'.$html.'</div>');
								fclose($wiki_file);
							?>
							<div id="wiki-edit">
								<h4>Edit Project Wiki</h4>
								<textarea id="wiki-edit-textarea" class="form-control">
									<?php echo($html); ?>
								</textarea>
								<button id="wiki-save" class="btn btn-button btn-top btn-large">Save</button>
							</div>
							
							<div class="reply-area">
								<button class="reply-button btn-button btn-large">Leave a Reply</button>
								<div class="reply-form">
									<div class="project-comment-header">
										<a class="project-avatar" href="#">
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
											</div>
										</div>
									</form>
								</div>
							</div><!-- .reply-area -->
						
						</div>
						
						<div class="col-md-1"></div>
					
						<!-- sidebar -->
						<div class="project-sidebar col-md-4">
							<div class="project-sidebar-item">
								<h3>Project Repo</h3>
								<div id="repo-code" class="repo-box repo-code"></div>
								<a class="btn btn-lg repo-link" href="<?php echo('https://github.com/'.$repo_code_link); ?>">Check <?php echo($repo_code_link); ?></a>
							</div>
							<div class="project-sidebar-item">
								<h4>Scrapbook</h4>
								<div id="repo-gist" class="repo-box repo-gist"></div>
								<a class="btn btn-lg repo-link" href="https://gist.github.com">Add New Snippet or File</a>
							</div>
						</div>
						
					</div>
					
				</div>
				
			</div><!-- container -->