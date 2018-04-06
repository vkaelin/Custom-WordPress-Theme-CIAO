<?php
/*
Template Name: Ajax-Test
*/

get_header(); ?>


	<section id="search">
		<div class="container">
			
			<form role="search" method="get" id="searchform" class="searchform" action="http://xn--bourrdesavoir-fhb.ch/">
				<div>
					<label class="screen-reader-text" for="s">Rechercher&nbsp;:</label>
					<input type="text" value="" name="s" id="s">
					<input type="submit" id="searchsubmit" value="Rechercher">
				</div>
			</form>

			<?php /*
	<section id="search">
		<div class="container">
			<div class="row">
				<div class="col-12 alert alert-success">
					<form id="form-ajax-test" action="" method="post">
						<p>Saisir un mot pour votre recherche.</p>
						<input type="text" id="send-value" name="send-value" value="">
						<input type="submit" name="vk-ajax-test-submit" value="valider">
					</form>
					<div id="result" class="m-up-20"></div>
				</div>
			</div> */?>


			<?php if(have_posts()): ?>
				<?php while(have_posts()): the_post(); ?>
					<div class="row mb-3">
						<div class="col-12">
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							<?php the_content(); ?>
						</div>
					</div> <!-- /row -->
				<?php endwhile; ?>

			<?php else: ?>
				<div class="row">
					<div class="col-12">
						<p>Il n'y a pas de résultats.</p>
					</div>
				</div>
			<?php endif; ?>

		</div> <!-- /container -->
	</section> 

<?php get_footer(); ?>