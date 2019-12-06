<? php// if( have_rows('carousel_images') ): ?>
<div class="relative">
    <section class="test-carousel clip-path-main-car">
        <div class="container-fluid flush">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-wrap <?php $categories = get_the_category();
 
if ( ! empty( $categories ) ) {
    echo esc_html( $categories[0]->name );   
} ?>">
                        <div class="main-carousel">
                            <?php while (have_rows('carousel_images')) : the_row();
                            $image = get_sub_field('carousel_image');

                            $size = 'large'; // (thumbnail, medium, large, full or custom size)

                            $link = get_sub_field('carousel_image_link');
                            ?>

                           
                            <div class="carousel-cell">
                        
                                    <a href="<?php echo $link; ?>" target="_blank">
                                    <div class="image-wrap">
                                        
    
                                
                                <img src="<?php echo $image ?>" alt="<?php echo $image['alt']?>"/>
                                </div>
                                      </a>
                                      <?php /* 
                                      <div class="speech">
                        
                            <img src="<?php echo get_template_directory_uri(); ?>/images/png/green-speech.png" class="img-responsive large--previous" alt="Previous"> <p><?php the_sub_field('speech_text'); ?></p></img>
                        </div>
                                         */ ?>
                            </div>
                      
                            <?php endwhile; ?>
                        </div>
                        <div class="carousel-controls-custom">
                            <div class="previous">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/png/large-previous.png" class="img-responsive large--previous" alt="Previous"/>
                            </div>
                            <div class="next">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/png/next-large.png" class="img-responsive large--next" alt="Next"/>
                            </div>
                        </div>

                        <?php if (is_page(6206)) {
                            ?>
                            <div class="stamp">
                                <a href="<?php the_field('left_stamp_link', 6206); ?>">
                                <?php if (get_field('left_stamp_image', 6206)) : ?>
                                <img src="<?php the_field('left_stamp_image', 6206); ?>" alt="right stamp" />
                                <?php endif; ?>
                                </a>
                            </div>
                             <div class="stamp-right">
                                <a href="<?php the_field('right_stamp_link', 6206); ?>" target="_blank">
                                <?php if (get_field('right_stamp_image', 6206)) : ?>
                                <img src="<?php the_field('right_stamp_image', 6206); ?>" alt="Right stamp" />
                                <?php endif; ?>
                                </a>
                            </div>
                        <?php 
                    } else {
                        ?>
                         <div class="stamp">
                            <a href="/tours">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/png/CollectSpend.png" class="img-responsive" alt="Collect Spend"/>
                            </a>
                        </div>
                    <?php 
                }
                ?>


                     
                        
                    </div>
                </div>
            </div>
        </div>

        <?php if (is_front_page()) : ?>
        
        <?php endif; ?>
        <!-- Boxes -->
    </section>
    <?php if (is_front_page()) : ?>
    <div class="boxes-wrap hidden-xs hidden-sm">
        <!-- Boxes -->
        <div class="boxes">
            <a href="#">
                <div id="local" class="intro-button box--lightblue box animated bounceInDown ">
                    <p class="small">I'm a Newmarket</p>
                    <h1>local</h1>
                    <div class="arrow-right-light-blue "></div>
                </div>
            </a>
            <a href="#">
                <div id="day" class="intro-button box--purple box animated bounceInDown">
                    <p class="small">I'm coming for the</p>
                    <h1>day</h1>
                    <div class="arrow-right-purple "></div>
                </div>
            </a>
            <a href="#">
                <div id="work" class="intro-button box--darkblue box animated bounceInDown">
                    <p class="small">I'm coming for</p>
                    <h1>work</h1>
                    <div class="arrow-right-dark-blue"></div>
                </div>
            </a>
            <a href="#">
                <div id="break" class="intro-button box--pink box animated bounceInDown">
                    <p class="small">I'm coming for a</p>
                    <h1>break</h1>
                    <div class="arrow-right-pink"></div>
                </div>
            </a>
        </div>
    </div>
    <?php else : ?>
    <!-- Do Nothing -->
    <?php endif; ?>
</div>
<? php// endif; ?>
<script>
jQuery(document).ready(function($) {
$('.main-carousel').flickity({
// options
cellAlign: 'center',
autoPlay: true,
contain: false,
wrapAround: true,
pageDots: false,
prevNextButtons: false
});
jQuery(document).ready(function( $ ) {
$('.large--previous').on( 'click', function() {
$('.main-carousel').flickity( 'previous');
});
$('.large--next').on( 'click', function() {
$('.main-carousel').flickity( 'next');
});
});
});
</script>