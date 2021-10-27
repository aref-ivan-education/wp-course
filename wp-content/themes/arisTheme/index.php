<?get_header();?>

<?php if(have_posts()):?>
    
        <div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				<?
						$postsHot = get_posts( array(
							'numberposts' => 2,
							'category'    => 0,
							'tag'		  => 'hot',
							'orderby'     => 'date',
							'post_type'   => 'post',
							'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
						) );

						
					?>
					<?php foreach($postsHot as $post):?>

					<!-- post -->
					<div class="col-md-6">
						<div class="post post-thumb">
							<a class="post-img" href="<?the_permalink()?>">
                                <img src="<?the_post_thumbnail_url( 'large' )?>" alt="">
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
					<?endforeach;?>
				</div>
				<!-- row -->
				
				<!-- Resent Post -->
				<?
						$postsRecent = get_posts( [
							'numberposts' =>13,
							'category'    => 0,
							'orderby'     => 'date',
							'order'       => 'DESC',
							'post_type'   => 'post',
							'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
						 ] );
						
				?>
				<?$countPostRecent=0;?>


				<!-- row -->
				<div class="row">
					<div class="col-md-12">
							<div class="section-title">
								<h2>Recent Posts</h2>
							</div>
					</div>
					<?php foreach(array_slice($postsRecent,0,6) as $post):?>

					
					<?$countPostRecent++?>

						<div class="col-md-4">
							<div class="post">
								<a class="post-img" href="<?the_permalink()?>">
									<img src="<?the_post_thumbnail_url( 'large' )?>" alt=""></a>
								<div class="post-body">
									<div class="post-meta">
										<?php $category_post=get_the_category($post->ID)[0];?>
										<a class="post-category <?=$category_post->description?>" href="<?=get_category_link($category_post->term_id)?> "><?=$category_post->cat_name?></a>
										<span class="post-date"><?get_the_date()?></span>
									</div>
									<h3 class="post-title"><a href="<?the_permalink()?>"><?the_title()?></a></h3>
								</div>
							</div>
						</div>
					<?if($countPostRecent==3):?>
						<div class="clearfix visible-md visible-lg"></div>
					<?endif;?>
					<?endforeach?>	
				</div>
				<!-- row -->

				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<!-- row -->
						<div class="row">
							<?php foreach(array_slice($postsRecent,6) as $post):?>
							<?$countPostRecent++?>
							<?if($countPostRecent==7):?>
							<div class="col-md-12">							
							<?else:?>
							<div class="col-md-6">
							<?endif;?>
							<div class="post post-thumb">
									<a class="post-img" href="<?the_permalink()?>">
										<img src="<?the_post_thumbnail_url( 'large' )?>" alt="">
									</a>
									<div class="post-body">
										<div class="post-meta">
											<?php $category_post=get_the_category($post->ID)[0];?>
											<a class="post-category <?=$category_post->description?>" href="<?=get_category_link($category_post->term_id)?> "><?=$category_post->cat_name?></a>
											<span class="post-date"><?get_the_date()?></span>
										</div>
										<h3 class="post-title"><a href="<?the_permalink()?>"><?the_title()?></a></h3>
									</div>
								</div>
								
							</div>
							


							<?endforeach;?>

						</div>
						<!-- row -->
					</div>
				</div>
				<!-- row -->
				
								

            </div>  
			<!-- container -->
        </div>

		

    <?php endif;?>
    


<?get_footer()?>

	
</html>
