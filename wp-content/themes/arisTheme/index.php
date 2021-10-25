<?get_header();?>

<?php if(have_posts()):?>
    
        <div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
                    <?php while(have_posts()):the_post();?>  	
					<!-- post -->
					<div class="col-md-6">
						<div class="post post-thumb">
							<a class="post-img" href="<?the_permalink()?>">
                                <?php the_post_thumbnail();?>
                            </a>
							<div class="post-body">
								<div class="post-meta">
                                    <?php $category_post=get_the_category($post->ID)[0];?>
									<a class="post-category <?=$category_post->description?>" href="<?=get_category_link($category_post->term_id)?> "><?=$category_post->cat_name?></a>
									<span class="post-date"> <? get_the_date()?></span>
								</div>
								<h3 class="post-title"><a href="<?the_permalink()?>"><?the_title()?></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
                    <?endwhile?>

					

				</div>
            </div>  
			<!-- container -->
        </div>
    <?php endif;?>
    <div class="section section-grey">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2>Featured Posts</h2>
						</div>
					</div>

					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="./img/post-4.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="category.html">JavaScript</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="./img/post-5.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-3" href="category.html">Jquery</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="./img/post-3.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-1" href="category.html">Web Design</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>


<?get_footer()?>

	
</html>
