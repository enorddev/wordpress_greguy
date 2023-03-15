<?php get_header() ?>

<div class="container-fluid container-flex">
  <div class="row about-figure">
    <div class="col-md about-page">
      <img class="img-fluid" src="<?php echo get_template_directory_uri() ?> /img/thumbnail.jpg" alt="">
    </div>
    <div class="col-md info">
      <h2 class="h2"><?php the_title() ?></h2>
      <p class="p-0"><?php the_content() ?></p>
    </div>
  </div>


</div>


<hr id="divider">

<div class="container-fluid services">

  <div class="row services-content">
    <div class=" col-md row-1">
      <div class="image-1">
        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?> /img/keys_image_1.jpg" alt="#">
      </div>

      <?php if (is_active_sidebar('desc1')) : ?>
        <div class="desc-1">
          <?php dynamic_sidebar('desc1') ?>
        </div>
      <?php endif ?>
    </div>

    <div class=" col-md row-2">
      <?php if (is_active_sidebar('desc2')) : ?>
        <div class="desc-2">
          <?php dynamic_sidebar('desc2') ?>
        </div>
      <?php endif ?>

      <div class="image-2">
        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?> /img/house.image.jpg" alt="#">
      </div>
    </div>


    <div class=" col-md row-3">
      <div class="image-3">
        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?> /img/kitchen_image_1.jpg" alt="">
      </div>

      <?php if (is_active_sidebar('desc3')) : ?>
        <div class="desc-3">
          <?php dynamic_sidebar('desc3') ?>
        </div>
      <?php endif ?>

    </div>
  </div>

</div>

</div>

<hr id="divider">


<?php get_footer() ?>