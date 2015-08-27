<?php get_header(); ?>

  <div class="content">
    <div class="post">
      <div class="container">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class="info_top">
            <div class="categories">
                Posted in <span class="category"><?php the_category(", "); ?></span>
            </div><!-- .categories -->
        </div><!-- .info_top -->
      </div><!-- .container -->
    </div><!-- .post -->
  </div><!-- .content -->

<?php get_footer(); ?>  