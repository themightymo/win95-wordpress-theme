<?php get_header(); ?>


    

    
	<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <!--
	    <h1 class="display-12"><?php the_title(); ?></h1>
        <p class="lead">Windows 95/98 stylized Bootstrap 4 theme. Responsive. Minimalistic. Modern.</p>
        -->
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/gifs/construction4.gif">
    </div>
    
    <!-- personal_page.html -->
	<div class="container" id="page-content">
	  <div class="row mb-5"> 
	      <div class="col-md-6 text-center">
		      	<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'title' => 'Feature image']); ?>
	      
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


    <!-- Not header -->

    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 text-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/macbook-mockup.png" class="img-fluid">
            </div>
            <div class="col-md-4 my-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Check out personal page</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Portfolio/Landing template</li>
                            <li>Alex's page</li>
                            <li>Cloud background</li>
                            <li>Winamp</li>
                            <li>It is very cool</li>
                        </ul>
                        <a href="personal_page.html" class="btn btn-lg btn-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/internet_connection_wiz-5.png" class="icon-16"> Okay, go</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap cards -->

    <div class="container" id="page-content">
        <div class="card-deck mb-3 text-center">
            <div class="card square mb-4">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Square card</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Normal card</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>20 users included</li>
                        <li>10 GB of storage</li>
                        <li>Priority email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
                </div>
            </div>
            <div class="card w95 mb-4">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"> One color card</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>20 users included</li>
                        <li>10 GB of storage</li>
                        <li>Priority email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header header-inactive">
                    <h4 class="my-0 font-weight-normal">Inactive card</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>30 users included</li>
                        <li>15 GB of storage</li>
                        <li>Phone and email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-primary" disabled>Contact us</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Forms -->

    <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Forms</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/envelope_closed-1.png" class="icon-16-4"> Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-95" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/keys-0.png" class="icon-16-4"> Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-95" id="inputPassword3">
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        First radio
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                        Second radio
                                    </label>
                                </div>
                                <div class="form-check disabled">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                    <label class="form-check-label" for="gridRadios3">
                                        Third disabled radio
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <div class="col-sm-2">Checkbox</div>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                    Example checkbox
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Icons -->

    <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Icons</h4>
            </div>
            <div class="card-body">
                <p>Here we have 256-color icons from Windows 98. In png. <br>
                    All icons can be viewed at <a href="https://win98icons.alexmeub.com/"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/search_web-1.png" class="icon-16-4"> win98icons.alexmeub.com</a></p>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/msie1-4.png">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/laptop_small-0.png">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/help_book_cool-1.png">
            </div>
        </div>
    </div>

    <!-- Progress -->

    <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Progress</h4>
            </div>
            <div class="card-body">
                <p>Normal progress bar</p>
                <div class="progress card">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <br>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <br>
                <div class="progress">
                    <div class="progress-bar " role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <br>
                <p>Class progress-bar-blocks</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-blocks" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Elder scroll</h4>
            </div>
            <div class="card-body windows-scrollbar" style="overflow-y: scroll; height:100px;">
                <h5>And modal:</h5>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Launch demo modal
                </button>
                <p>Click button to show modal.</p>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/confused_travolta.gif" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- OTHER-->
    <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Other things</h4>
            </div>
            <div class="card-body">
                
                <a class="btn btn-primary " href="video-background.html">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/video_-0.png" class="icon-16"> Video background
                </a>
                <p>Page with video background.</p>
				
				<a class="btn btn-primary " href="cloud.html">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/world_network_directories-1.png" class="icon-16"> Cloud
                </a>
                <p>Cloud hosting landing page template.</p>
				
				<a class="btn btn-primary " href="mobile.html">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/laptop_infrared-2.png" class="icon-16"> Mobile
                </a>
                <p>Mobile app landing page template.</p>
				

            </div>
        </div>
    </div>



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
