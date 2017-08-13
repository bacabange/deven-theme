<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Deven_Blog
 */

?>


	<div class="Section Section-light first-section">
		<a class="btn-floating btn-large btn-header waves-effect waves-light btn-primary"><i class="fa fa-angle-down"></i></a>

		<div class="container">

			<div class="row">
				<div class="col s12">

					<div class="card-panel card-panel-profile white">
						<div class="row">
							<div class="col s4 offset-s4 m2 offset-m5">
								<img src="<?php echo get_template_directory_uri() ?>/img/profile-2.jpg" alt="" class="responsive-img circle">
							</div>

							<div class="col s12 center-align">
								<h1 class="card-panel-profile-name">Stiven Castillo</h1>
								<p class="grey-text text-grey-lighten-3">Designer/Developer</p>
							</div>
						</div>
						<!-- {{ <span class="gray-text"> I'm web developer and graphic designer. I work as freelance designing Applications Mobile and web. </span> }} -->
					</div>

					<div class="card-panel card-panel-skills">
						<div class="row">
							<div class="col s4">
								<p>Web Development</p>
								<div class="progress grey lighten-5">
									<div class="determinate orange accent-4" style="width: 80%"></div>
								</div>

								<p>PHP</p>
								<div class="progress grey lighten-5">
									<div class="determinate orange accent-4" style="width: 70%"></div>
								</div>

								<p>Laravel</p>
								<div class="progress grey lighten-5">
									<div class="determinate orange accent-4" style="width: 90%"></div>
								</div>

								<p>Javascript</p>
								<div class="progress grey lighten-5">
									<div class="determinate orange accent-4" style="width: 75%"></div>
								</div>

								<p>Nodejs</p>
								<div class="progress grey lighten-5">
									<div class="determinate orange accent-4" style="width: 50%"></div>
								</div>

								<p>ReactJs</p>
								<div class="progress grey lighten-5">
									<div class="indeterminate orange accent-4"></div>
								</div>
							</div>

							<div class="col s4">
								<p>Web Design</p>
								<div class="progress grey lighten-5">
									<div class="determinate green accent-3" style="width: 80%"></div>
								</div>

								<p>CSS/HTML</p>
								<div class="progress grey lighten-5">
									<div class="determinate green accent-3" style="width: 90%"></div>
								</div>

								<p>Preprocessors (SASS/Stylus)</p>
								<div class="progress grey lighten-5">
									<div class="determinate green accent-3" style="width: 90%"></div>
								</div>

								<p>Bootstrap</p>
								<div class="progress grey lighten-5">
									<div class="determinate green accent-3" style="width: 90%"></div>
								</div>

								<p>Angular 4</p>
								<div class="progress grey lighten-5">
									<div class="determinate green accent-3" style="width: 40%"></div>
								</div>

								<p>React Native</p>
								<div class="progress grey lighten-5">
									<div class="indeterminate green accent-3"></div>
								</div>
							</div>

							<div class="col s4">
								<p>Design</p>
								<div class="progress grey lighten-5">
									<div class="determinate cyan accent-4" style="width: 60%"></div>
								</div>

								<p>Illustrator</p>
								<div class="progress grey lighten-5">
									<div class="determinate cyan accent-4" style="width: 50%"></div>
								</div>

								<p>Photoshop</p>
								<div class="progress grey lighten-5">
									<div class="determinate cyan accent-4" style="width: 60%"></div>
								</div>

								<p>Branding</p>
								<div class="progress grey lighten-5">
									<div class="determinate cyan accent-4" style="width: 70%"></div>
								</div>

								<p>Ionic 3</p>
								<div class="progress grey lighten-5">
									<div class="determinate cyan accent-4" style="width: 30%"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12">
					<p class="flow-text grey-text text-darken-1">Projects / Works</p>
				</div>

				<div class="col s12 m4">
					<div class="card hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="<?php echo get_template_directory_uri() ?>/img/works/samsung-club.png" alt="Samsung Club">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Samsung Club<i class="material-icons right">more_vert</i></span>
							<small>2015</small>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Samsung Club<i class="material-icons right">close</i></span>
							<p>I built the APIRest with Laravel 5.1.</p>
							<!-- <a class="waves-effect waves-light btn btn-primary">Show</a> -->
						</div>
					</div>
				</div>

				<div class="col s12 m4">
					<div class="card hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="<?php echo get_template_directory_uri() ?>/img/works/samsung-concierge.png" alt="Samsung Concierge">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Samsung Concierge<i class="material-icons right">more_vert</i></span>
							<small>2016</small>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Samsung Concierge<i class="material-icons right">close</i></span>
							<p>I built the APIRest with Laravel 5.1, I used JWT for built the authentication system.</p>
							<!-- <a class="waves-effect waves-light btn btn-primary">Show</a> -->
						</div>
					</div>
				</div>

				<div class="col s12 m4">
					<div class="card hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="<?php echo get_template_directory_uri() ?>/img/works/mddp.png" alt="Mi derecho de petición">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">MiDerechoDePetición<i class="material-icons right">more_vert</i></span>
							<small>2016</small>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">MiDerechoDePetición<i class="material-icons right">close</i></span>
							<p>I built this platform in Laravel 5.2 and I Designed it with Bootstrap and jQuery.</p>
							<a class="waves-effect waves-light btn btn-primary" target="_blank" href="https://miderechodepeticion.com/">Show</a>
						</div>
					</div>
				</div>

				<div class="col s12 m4">
					<div class="card hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="<?php echo get_template_directory_uri() ?>/img/works/zue.png" alt="Zue Beauty">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Zue Beauty<i class="material-icons right">more_vert</i></span>
							<small>2017</small>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Zue Beauty<i class="material-icons right">close</i></span>
							<p>I built the APIRest with Laravel 5.3, I used Bootstrap and Stylus (preprocessor css).</p>
							<a class="waves-effect waves-light btn btn-primary" target="_blank" href="http://causes.zuebeauty.com/">Show</a>
						</div>
					</div>
				</div>

				<div class="col s12 m4">
					<div class="card hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="<?php echo get_template_directory_uri() ?>/img/works/cidefer.png" alt="Cidefer">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Cidefer<i class="material-icons right">more_vert</i></span>
							<small>2015</small>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Cidefer<i class="material-icons right">close</i></span>
							<p>I built the APIRest with Laravel 5 with Bootstrap.</p>
							<a class="waves-effect waves-light btn btn-primary" target="_blank" href="http://cidefer.com/">Show</a>
						</div>
					</div>
				</div>

				<div class="col s12 m4">
					<div class="card hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="<?php echo get_template_directory_uri() ?>/img/works/cdc.png" alt="ClickDecoClick">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">ClickDecoClick<i class="material-icons right">more_vert</i></span>
							<small>2015</small>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">ClickDecoClick<i class="material-icons right">close</i></span>
							<p>I built the APIRest with Laravel 5 with Bootstrap and Javascript.</p>
							<a class="waves-effect waves-light btn btn-primary" target="_blank" href="http://clickdecoclick.com/">Show</a>
						</div>
					</div>
				</div>


			</div>

		</div>
	</div>
