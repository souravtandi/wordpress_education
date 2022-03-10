<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <?php dynamic_sidebar('main-sidebar'); ?>
      </div>

      <div class="box">
         <?php dynamic_sidebar('footer-widget-1'); ?>
      </div>

      <div class="box">
         <?php dynamic_sidebar('footer-widget-2'); ?>
      </div>

      <div class="box">
         <?php dynamic_sidebar('footer-widget-3'); ?>
      </div>

      </div>
         <?php dynamic_sidebar('footer-widget-4'); ?>
      <div class="credit"> created by <span>mr. web designer</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->







<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>