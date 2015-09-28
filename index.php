<?php get_header(); ?>
<?php if ( ! have_posts() ) : ?>
        <h1>Not Found</h1>
            <p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post</p>
<?php endif; ?>
 
<?php while ( have_posts() ) : the_post(); ?>
  <div class="content">
    <div class="post">
      <div class="container">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class="info_top">
            <span class="post_categories">
                Posted in <span class="category"><?php the_category(", "); ?></span>
            </span><!-- .post_categories -->
            <span class="post_author">
                by <?php the_author_link(); ?>
            </span><!-- .post_author -->
        </div><!-- .info_top -->
        <div class="post_body">
            <?php
                if (is_archive() || is_search()){
                    the_excerpt();
                }
                else{
                    the_content("Click for full post");
                }
            ?>
        </div><!-- .post_body -->
        <div class="info_bottom">
            <span class="post_comments">
                <?php comments_popup_link("0 comments", "1 comment", "% comments", "comments_link", "Comments are disabled"); ?>
            </span><!-- .post_comments -->
        </div><!-- .info-bottom -->
      </div><!-- .container -->
    </div><!-- .post -->
  </div><!-- .content -->
<?php endwhile; ?>
<?php get_footer(); ?>  