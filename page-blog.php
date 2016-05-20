<?php get_header(); ?> 

<!-- open .blog__container -->
<section class="blog">
	<!-- open .container -->
	<div class="container">
		<!-- open .blog__content -->
		<div class="blog__content">
			<!-- open .breadscrubs -->
					<div class="breadscrubs">
						<li><a href="#">Главная</a></li>
						<li class="active"><a href="#">Блог</a></li>				
					</div>
					<!-- close .breadscrubs -->
					<!-- open .blog__flex -->
					<div class="blog__flex">
						<!-- open .blog__all -->
						<div class="blog__all">

							<!-- open .blog__all_item -->
							<div class="blog__all_item">
								<span class="blog_date">13.05.2016</span>
								<strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</strong>
								<!-- open .blog__all_item_thumb -->
								<div class="blog__all_item_thumb">
									<img src="<?php bloginfo('template_directory'); ?>/img/Form.jpg" alt="" />
								</div>
								<!-- close .blog__all_item_thumb -->
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae </p>
								<a href="#" class="blog__all_item_open">Читать далее <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</div>
							<!-- close .blog__all_item -->

							<!-- open .blog__all_item -->
							<div class="blog__all_item">
								<span class="blog_date">13.05.2016</span>
								<strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</strong>
								<!-- open .blog__all_item_thumb -->
								<div class="blog__all_item_thumb">
									<img src="<?php bloginfo('template_directory'); ?>/img/Form.jpg" alt="" />
								</div>
								<!-- close .blog__all_item_thumb -->
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae </p>
								<a href="#" class="blog__all_item_open">Читать далее <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</div>
							<!-- close .blog__all_item -->
						</div>
						<!-- close .blog__all -->
						<!-- open .blog__newest -->
						<div class="blog__newest">
							<!-- open .blog__newest_title -->
							<h4 class="blog__newest_title"><span>новое</span></h4>
							<!-- close .blog__newest_title -->
							<!-- open .blog__newest_item -->
							<div class="blog__newest_item">
								<!-- open .blog__newest_item_thumb -->
								<div class="blog__newest_item_thumb">
									<img src="<?php bloginfo('template_directory'); ?>/img/Layer-1.jpg" alt="" />
								</div>
								<!-- close .blog__newest_item_thumb -->
								<!-- open .blog__newest_item_text -->
								<div class="blog__newest_item_text">
									<span class="blog_date">25.04.2016</span>
									<strong>Lorem ipsum dolor sit amet, conse elit, sed do eiusmod tempor incididunt ut </strong>
									<!-- open .blog__newest_item_open -->
									<a href="#" class="blog__newest_item_open">Читать далее</a>
									<!-- close .blog__newest_item_open -->
								</div>
								<!-- close .blog__newest_item_text -->
							</div>
							<!-- close .blog__newest_item -->
							
							<!-- open .blog__newest_item -->
							<div class="blog__newest_item">
								<!-- open .blog__newest_item_thumb -->
								<div class="blog__newest_item_thumb">
									<img src="<?php bloginfo('template_directory'); ?>/img/Layer-1.jpg" alt="" />
								</div>
								<!-- close .blog__newest_item_thumb -->
								<!-- open .blog__newest_item_text -->
								<div class="blog__newest_item_text">
									<span class="blog_date">25.04.2016</span>
									<strong>Lorem ipsum dolor sit amet, conse elit, sed do eiusmod tempor incididunt ut </strong>
									<!-- open .blog__newest_item_open -->
									<a href="#" class="blog__newest_item_open">Читать далее</a>
									<!-- close .blog__newest_item_open -->
								</div>
								<!-- close .blog__newest_item_text -->
							</div>
							<!-- close .blog__newest_item -->
						</div>
						<!-- close .blog__newest -->
					</div>
					<!-- close .blog__flex -->
					
					<!-- open .pagination -->
					<ul class="pagination">
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li class="active"><a href="#">3</a></li>
						<li>...</li>
						<li><a href="#">12</a></li>
						<li><a href="#">13</a></li>
						<li><a href="#">14</a></li>
						<li><a href="#">Следующая страница</a></li>
					</ul>
					<!-- close .pagination -->
		</div>
		<!-- close .blog__content -->
	</div>
	<!-- close .container -->
</section>
<!-- close .blog__container -->
<?php get_template_part('partners'); ?>
<?php get_footer(); ?> 