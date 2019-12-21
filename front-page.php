<?php
/**
 * The template the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package evolvable
 */

get_header();
?>

<section id="hero" class="w-100 h-75">
  <div class="container">
    <img class="w-66 my-5" src="assets/img/evolvable-wordmark-inverse_L.png" alt="">
    <div class="my-2 w-50">
      <h1 class="font-xl my-2 headline" style="white-space:pre;">Further
Together.</h1>
      <h4 class="font-lg my-5" style="white-space:pre;">We are an experience design and business development
agency based in San Francisco, California.</h4>
      <h4 class="font-lg my-5">We believe fully in you and your company’s ability to evolve.</h4>
    </div>
    <div class="mb-4 gradient-line"></div>
  </div>
</section>

<?php get_footer(); ?>