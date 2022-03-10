<?php get_header();?>

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">
      
      <div class="swiper-wrapper">

         <section class="swiper-slide slide" style="background: url(<?php the_field('frontpage_image'); ?>) no-repeat;">
            <div class="content">
               <h3><?php the_field('front_page'); ?></h3>
               <p><?php the_field('frontpage_description'); ?></p>
               <a href="#" class="btn">get started</a>
            </div>
         </section>

         <section class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat;">
            <div class="content">
               <h3>the best courses you will find find here!</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit labore dolore unde, quidem corrupti?</p>
               <a href="#" class="btn">get started</a>
            </div>
         </section>

         <section class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat;">
            <div class="content">
               <h3>the best courses you will find find here!</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit labore dolore unde, quidem corrupti?</p>
               <a href="#" class="btn">get started</a>
            </div>
         </section>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- home section ends -->

<!-- subjects section starts  -->

<section class="subjects">

   <h1 class="heading">our popular subjects</h1>

   <div class="box-container">

   <?php
      $portfolio_arguments = array(
            'post_type' => 'portfolio',
            'posts_per_page' => 6
      );
      $portfolios = new WP_Query($portfolio_arguments);
      while($portfolios -> have_posts()){
            $portfolios->the_post();
      
      ?>

      <div class="box">
      <a href="<?php the_permalink(); ?>" class="image featured">
         <?php the_post_thumbnail('home-featured'); ?>
      </a>
         <h3><?php the_title(); ?></h3>
         
         <?php the_excerpt(); ?>
      </div>
      <?php } ?>
      <?php wp_reset_postdata(); ?>
   </div>

</section>

<!-- subjects section ends -->

<!-- home courses slider section starts  -->

<section class="home-courses">

   <h1 class="heading"> our popular courses </h1>

   <div class="swiper home-courses-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-1.png" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-2.png" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-3.png" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-4.png" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-5.png" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-6.png" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

      </div>

   </div>

</section>
<?php get_footer();?>

<!-- home courses slider section ends -->