
<?php get_header() ?>
<section class="showcase">
             <div class="container">
                 <h1>Blog Post </h1>
                 
             </div>
</section>
<style>
    .showcase{
        background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/image/banner_news.jpg');?> ) no-repeat center center;
    }
    </style>

<div class="container blog-header ">
  <div class="row">
    <div class="col-md-9 blog-head">
      <h2 style="text-align:left; color:#428bca">Latest News</h2>
    </div>
    <div class="col-md-3 blog-head" >
        <h2 style="text-align:center; background:#4388c3; font-color:#fff;">Suggested Post</h2>
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
                          
                          <div>  
              
              <a href="<?php the_permalink()?>">
              <?php the_content(); ?>
</div>
              <hr>
            
              <?php endwhile; ?>
              
              <?php else : ?>
            <p>
              
                <?php  __('no post found'); ?>
             </p>
             <hr>
                <?php endif; ?>
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->
       <?php if(!is_front_page()) : ?>
        <aside class="col-md-4 blog-sidebar">
          <?php if(is_active_sidebar('sidebar')): ?>
            <?php dynamic_sidebar('sidebar'); ?>
          <?php endif; ?>
        </aside><!-- /.blog-sidebar -->
  <?php endif; ?>
  <style>
    .box{
      padding:0px;
      border:#fff 0px solid;
    }
    </style>
      </div><!-- /.row -->
    </main><!-- /.container -->
    <?php get_footer(); ?>