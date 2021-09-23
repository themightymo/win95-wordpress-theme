<?php get_header(); ?>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Toby's personal webpage</h1>
  <p class="lead">Totally awesome.</p>
</div>
	<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/gifs/construction4.gif">
    </div>
    
    <!-- personal_page.html -->
	<div class="container" id="page-content">
	  <div class="row mb-5"> 
	      <div class="col-md-6 text-center">
		      	<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'title' => 'Feature image']); ?>
			  	<?php echo '<br>' . getRandomImage($dir_path); ?>
	      </div>
	      <div class="col-md-6 my-auto">
	            <div class="card">
	              <div class="card-header icon">
	                <h4 class="my-0 font-weight-normal "><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/note-0.png"><?php the_title(); ?></h4>
	              </div>
	              <div class="card-body">
	                <?php the_content(); ?>
	                <div class="btn-group btn-block" role="group" aria-label="Basic example">
	                  <a href="/contact-3" style="position: relative;-ms-flex: 1 1 auto;flex: 1 1 auto;"><button type="button" class="btn btn-secondary" style="width:100%;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/envelope_closed-1.png" class="icon-16"> Email me</button></a>
	                  <a href="/blog" style="position: relative;-ms-flex: 1 1 auto;flex: 1 1 auto;"><button type="button" class="btn btn-secondary" style="width:100%;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/globe_map-4.png" class="icon-16">  Read My Blog</button></a>
	                  <a href="/contact-3" style="position: relative;-ms-flex: 1 1 auto;flex: 1 1 auto;"><button type="button" class="btn btn-secondary" style="width:100%;">Win95.CSS</button></a>
	                </div>
	              </div>
	            </div>
	        </div>
	  </div>
	</div>
	<!-- /personal_page.html -->





    <!-- Footer -->
    <footer class="taskbar">
        <div class="row" style="margin-right: 0px;">
            <div class="col-6">
                <a href="//tobycryns.com" class="btn start-button"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/users-1.png" class="icon-16">Toby's Blog</a>
                <a href="https://github.com/themightymo/win95-wordpress-theme" class="btn start-button"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/directory_folder_options-5.png" class="icon-16">Win95 WordPress Theme on GitHub</a>
            </div>
            <div class="col-6 time">Win95 Design By <a href="https://github.com/AlexBSoft/win95.css" target="_blank">Alex B</a> | WordPress port by <a href="https://tobycryns.com">Toby Cryns</a></div>
        </div>

    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
