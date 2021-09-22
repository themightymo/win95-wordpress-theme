<?php get_header(); ?>

	<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <!--
	    <h1 class="display-12"><?php the_title(); ?></h1>
        <p class="lead">Windows 95/98 stylized Bootstrap 4 theme. Responsive. Minimalistic. Modern.</p>
        -->
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/gifs/construction4.gif">
    </div>
    
    <?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();  ?>
        
    
    <!-- personal_page.html -->
	<div class="container" id="page-content">
	  <div class="row mb-5"> 
	      <div class="col-md-6 text-center">
		      	<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'title' => 'Feature image']); ?>
			  	<?php echo getRandomImage($dir_path); ?>
	      </div>
	      <div class="col-md-6 my-auto">
	            <div class="card">
	              <div class="card-header icon">
	                <h4 class="my-0 font-weight-normal "><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/note-0.png"><?php the_title(); ?></h4>
	              </div>
	              <div class="card-body">
	                <?php the_content(); ?>
	                <div class="btn-group btn-block" role="group" aria-label="Basic example">
	                  <button type="button" class="btn btn-secondary"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/envelope_closed-1.png" class="icon-16"> Email me</button>
	                  <button type="button" class="btn btn-secondary"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/globe_map-4.png" class="icon-16">  Find me IRL</button>
	                  <button type="button" class="btn btn-secondary">Win95.CSS</button>
	                </div>
	              </div>
	            </div>
	        </div>
	  </div>
	</div>
	<!-- /personal_page.html -->
<?php 
endwhile; 
endif; 

get_footer();