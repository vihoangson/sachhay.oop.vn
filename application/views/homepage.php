<?php
defined('BASEPATH') OR exit('No direct script access allowed');
define("TEMPLATE_URL","/assets/template/porto/");
$this->load->view('_includes/header');
?>
							<div class="blog-posts">
								<?php 
								foreach ($rs as $key => $value) {
								?>
								<article class="post post-medium">
									<div class="row">

										<div class="col-md-5">
											<div class="post-image">
												<div class="owl-carousel owl-theme" data-plugin-options='{"items":1}'>
													<div>
														<div class="img-thumbnail">
															<img class="img-responsive" src="<?= TEMPLATE_URL; ?>img/blog/blog-image-1.jpg" alt="">
														</div>
													</div>
													<div>
														<div class="img-thumbnail">
															<img class="img-responsive" src="<?= TEMPLATE_URL; ?>img/blog/blog-image-2.jpg" alt="">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-7">

											<div class="post-content">

												<h2><a href="/book/detail/<?= $value->id; ?>"><?= $value->article_title; ?></a></h2>
												<?= $value->article_content; ?>

											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="post-meta">
												<span><i class="fa fa-calendar"></i> January 10, 2015 </span>
												<span><i class="fa fa-user"></i> By <a href="<?= TEMPLATE_URL; ?>#">John Doe</a> </span>
												<span><i class="fa fa-tag"></i> <a href="<?= TEMPLATE_URL; ?>#">Duis</a>, <a href="<?= TEMPLATE_URL; ?>#">News</a> </span>
												<span><i class="fa fa-comments"></i> <a href="<?= TEMPLATE_URL; ?>#">12 Comments</a></span>
												<a href="<?= TEMPLATE_URL; ?>blog-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
											</div>
										</div>
									</div>

								</article>
								<?php } ?>
								<ul class="pagination pagination-lg pull-right">
									<li><a href="<?= TEMPLATE_URL; ?>#">«</a></li>
									<li class="active"><a href="<?= TEMPLATE_URL; ?>#">1</a></li>
									<li><a href="<?= TEMPLATE_URL; ?>#">2</a></li>
									<li><a href="<?= TEMPLATE_URL; ?>#">3</a></li>
									<li><a href="<?= TEMPLATE_URL; ?>#">»</a></li>
								</ul>

							</div>
<?php 
$this->load->view('_includes/footer');
 ?>
