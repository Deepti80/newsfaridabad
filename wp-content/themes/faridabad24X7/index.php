
<?php get_header() ?>
<div class="container blog-header ">
  <div class="row">
    <div class="col-md-9 blog-head">
      <h3>Latest News</h3>
    </div>
    <div class="col-md-3 blog-head">
        <h3>Suggested Post</h3>
    </div>
  </div>
</div>

<h3 class="<?php the_title(); ?>"></h3>

    <main role="main" class="container">
    <h3 class="<?php the_title(); ?>"></h3>
      <div class="row">
        <div class="col-md-8 blog-main">
          
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
          

          <div class="blog-post">
            <h2 class="<?php the_title(); ?>">
              
            <a href="<?php the_permalink();?>" >
            <?php the_title(); ?></h2>
            </a>
            <p class="blog-post-meta">
              <?php the_time('F j, Y g,:i a'); ?> 
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>" >
                  <?php the_author(); ?> 
                </a>
            </p>
            <?php if(has_post_thumbnail()) : ?>
            
            <div class="post-thumb">
            <div class="banner"> 
  <a href="<?php the_permalink() ?>" alt="<?php _e('Read full article', 'theme');?>" title="<?php _e('Read full article', 'theme');?>">
  <?php the_post_thumbnail('name-thumb'); ?></a>

</div>    

  
              
              
              </div>
              
              
            <?php endif; ?>  
              <?php the_content(); ?>
              <hr>
            
              <?php endwhile; ?>
              
              <?php else : ?>
            <p>
              
                <?php  __('no post found'); ?>
             </p>
             <hr>
                <?php endif; ?>
                <div class="col-md-4 blog-main">
                <h5 class="<?php the_content(); ?> "></h5>
              </div>
           
      
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->
        <div class="wrapper">
        <aside class="col-md-4 blog-sidebar">
          
          <?php if(is_active_sidebar('sidebar')): ?>
            <?php dynamic_sidebar('sidebar'); ?>
          <?php endif; ?>

          
        </aside><!-- /.blog-sidebar -->
        </div>

      </div><!-- /.row -->

    </main><!-- /.container -->

    
<?php get_footer() ?>