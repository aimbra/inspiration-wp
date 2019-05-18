<?php

/**
 * Template Name: General Template
 * Author: Thiago Cunha
 */
?>
<?php get_header(); ?>
<main>
  <?php
  if (have_posts()):
    while(have_posts()): the_post();?>
    <p>Conteúdo vindo do arquivo home.php</p>
  <?php
    endwhile;
  else:
    ?>
  <article>
    <p class="alert alert-danger">Nenhum conteúdo a ser mostrado</p>
  </article>
  <?php
  endif;
  ?>
</main>
<?php get_footer(); ?>