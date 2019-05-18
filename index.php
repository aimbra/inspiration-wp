<?php get_header(); ?>
<main>

  <?php
  if (have_posts()):
    the_content();
  else:
    ?>
  <p class="alert alert-danger">Nenhum conteúdo a ser mostrado</p>
  <?php
  endif;
  ?>

</main>
<?php get_footer(); ?>