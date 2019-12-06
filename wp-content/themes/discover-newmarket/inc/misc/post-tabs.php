<div class="tabees">


<div class="tab-wrap">

    <!-- active tab on page load gets checked attribute -->
<?php if( get_field('tab_one_title') && get_field('tab_one_content')): ?>
    <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>
    <label for="tab1"><?php the_field('tab_one_title'); ?></label>
<?php endif; ?>
<?php if( get_field('tab_two_title') && get_field('tab_two_content')): ?>
    <input type="radio" id="tab2" name="tabGroup1" class="tab">
    <label for="tab2"><?php the_field('tab_two_title'); ?></label>
<?php endif; ?>
<?php if( get_field('tab_three_title') && get_field('tab_three_content')): ?>
    <input type="radio" id="tab3" name="tabGroup1" class="tab">
    <label for="tab3"><?php the_field('tab_three_title'); ?></label>
<?php endif; ?>
<?php if( get_field('tab_one_title') && get_field('tab_one_content')): ?>
    <div class="tab__content">
    <?php the_field('tab_one_content'); ?>
    </div>
<?php endif; ?>
<?php if( get_field('tab_two_title') && get_field('tab_two_content')): ?>
    <div class="tab__content">
       <?php the_field('tab_two_content'); ?>
    </div>
<?php endif; ?>
<?php if( get_field('tab_three_title') && get_field('tab_three_content')): ?>
    <div class="tab__content">
      <?php the_field('tab_three_content'); ?>
    </div>
<?php endif; ?>
  </div>


</div>