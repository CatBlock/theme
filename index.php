<?php get_header(); ?>

  <div class="content">
    <div class="post">
      <div class="container">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class="info_top">
            <div class="post_categories">
                Posted in <span class="category"><?php the_category(", "); ?></span>
            </div><!-- .post_categories -->
            <div class="post_author">
                by <?php the_author_link(); ?>
            </div><!-- .post_author -->
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
            <div class="post_comments">
                <?php comments_popup_link("0 comments", "1 comment", "% comments", "comments_link", "Comments are disabled"); ?>
            </div><!-- .post_comments -->
        </div><!-- .info-bottom -->
      </div><!-- .container -->
    </div><!-- .post -->
  </div><!-- .content -->

<?php get_footer(); ?>  