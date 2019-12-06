<?php /*Template Name: Groups Page */ get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

	<?php if (get_field('carousel_images')) : ?>
		<?php get_template_part('inc/carousels/main-carousel'); ?>
	<section class="intro-content-sec-getting-here">
	<?php else : ?>
	<section class="intro-content-sec">
<?php endif; ?>
		<div class="container">
			<div class="carousel-wrap">
				<div class="row">
					<div class="col-md-12">
						<div class="intro-wrapper">
							<div class="featured-image">
								<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
							</div>
							<div class="intro-content">
								<h2>
									<?php the_field('intro_paragraph_title'); ?>
								</h2>
								<p>
									<?php the_field('intro_paragraph'); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="content-generic table-section">
		<div class="container">
			<div class="row">
				<!-- <div class="col-md-12">
					<h2 class="page-title-pink"><?php /*the_title(); */ ?></h2>
                </div> -->
			</div>
			<div class="row padding-top-5x">
                <div class="col-md-12">
                <?php 
                $table = get_field('price_table');

                if ($table) {

                    echo '<table class="large" border="0">';

                    if ($table['header']) {

                        echo '<thead>';

                        echo '<tr>';

                        foreach ($table['header'] as $th) {

                            echo '<th>';
                            echo $th['c'];
                            echo '</th>';
                        }

                        echo '</tr>';

                        echo '</thead>';
                    }

                    echo '<tbody>';

                    foreach ($table['body'] as $tr) {

                        echo '<tr>';

                        foreach ($tr as $td) {

                            echo '<td>';
                            echo $td['c'];
                            echo '</td>';
                        }

                        echo '</tr>';
                    }

                    echo '</tbody>';

                    echo '</table>';
                }
                ?>

                <?php 
                $table = get_field('price_table_mobile');

                if ($table) {

                    echo '<table class="small" border="0">';

                    if ($table['header']) {

                        echo '<thead>';

                        echo '<tr>';

                        foreach ($table['header'] as $th) {

                            echo '<th>';
                            echo $th['c'];
                            echo '</th>';
                        }

                        echo '</tr>';

                        echo '</thead>';
                    }

                    echo '<tbody>';

                    foreach ($table['body'] as $tr) {

                        echo '<tr>';

                        foreach ($tr as $td) {

                            echo '<td>';
                            echo $td['c'];
                            echo '</td>';
                        }

                        echo '</tr>';
                    }

                    echo '</tbody>';

                    echo '</table>';
                }
                ?>
                </div>

                <div class="col-md-12 tailor-your-xp">
					<div class="content-two">
						<h2><?php the_field('right_paragraph_title'); ?></h2>
						<p><?php the_field('right_paragraph_content'); ?>
						</p>
					</div>
                </div>
			</div>
		</div>
	</section>


	<?php /*
	<section class="callouts">
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-8">
					<h2><?php the_field('callout_text'); ?></h2>
				</div>
			</div>
		</div>

	</section>
 */ ?>
	<!-- Latest News -->
	<?php get_template_part('inc/carousels/news'); ?>
	<!-- Latest News -->
	<!-- Talk of the Town -->
	<?php get_template_part('inc/feeds/social-feed'); ?>
	<!-- Talk of the Town -->
<?php endwhile; ?>
<?php get_footer(); ?>
