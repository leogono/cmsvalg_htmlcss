<div class="container">
  <div class="row">
    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class('col-sm-8 col-md-9'); ?>>
        <div id="content">
          <header class="post-header">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <?php get_template_part('templates/entry-meta'); ?>
          </header>

          <div class="entry-content">
            <?php the_content(); ?>
          </div>

          <footer>
            <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
          </footer>

          <div class="referencer">
            <h2 class="box-title">Referencer</h2>
            <ul class="lists referemce-list">
              <li><a href="#">Lorem ipsum dolor sit amet</a> - Proin gravida nibh vel velit auctor aliquet.</li>
              <li><a href="#">Lorem ipsum dolor sit amet</a> - Proin gravida nibh vel velit auctor aliquet.</li>
              <li><a href="#">Lorem ipsum dolor sit amet</a> - Proin gravida nibh vel velit auctor aliquet.</li>
            </ul>
          </div>

          <div id="comments-tag">
            <h2 class="box-title">Kommentarer</h2>
            <?php comments_template('/templates/comments.php'); ?>
          </div>
        </div>

        <!-- Related Posts -->
        <div id="related-posts">
          <h2 class="float-title">Relaterede Umbraco artikler</h2>

          <div id="content-lists">
            <div class="row">
              <article class="related-post col-sm-4 w-thumbnails">
                <a href="#" class="post-thumbnail">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/post-thumb.jpg" alt="Post Title" class="img-responsive">
                </a>
                <h1 class="post-title"><a href="#">5 råd til valg af det bedste e-handels CMS</a></h1>
                <div class="comment-count-wrap">
                  <a href="#" class="comment-count"><i class="icon-comment"></i> 5</a>
                </div>
              </article>
              <article class="related-post col-sm-4 w-thumbnails">
                <a href="#" class="post-thumbnail">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/post-thumb.jpg" alt="Post Title" class="img-responsive">
                </a>
                <h1 class="post-title"><a href="#">5 råd til valg af det bedste e-handels CMS</a></h1>
                <div class="comment-count-wrap">
                  <a href="#" class="comment-count"><i class="icon-comment"></i> 5</a>
                </div>
              </article>
              <article class="related-post col-sm-4 w-thumbnails">
                <a href="#" class="post-thumbnail">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/post-thumb.jpg" alt="Post Title" class="img-responsive">
                </a>
                <h1 class="post-title"><a href="#">5 råd til valg af det bedste e-handels CMS</a></h1>
                <div class="comment-count-wrap">
                  <a href="#" class="comment-count"><i class="icon-comment"></i> 5</a>
                </div>
              </article>
            </div>
          </div>
        </div>
        
      </article>
    <?php endwhile; ?>

    <aside class="col-sm-4 col-md-3">
      <div class="widget author-info">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 250 ); ?>
        <h3 class="author-name"><?php echo get_the_author(); ?></h3>
        <div class="author-bio">
          <?php the_author_meta('description'); ?>
        </div>
        <i class="icon-caret-left"></i>
      </div>
    </aside>
  </div>
</div>