
<?php get_header() ?>
<section class="showcase">
             <div class="container">
                 <h1>Single Post </h1>
                 
             </div>
</section>
<style>
    .showcase{
        background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/image/banner_news.jpg');?> ) no-repeat center center;
    }
    </style>



<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
      
      </h3>

      <div class="blog-post">
        <h2 class="blog-post-title">
     
        <?php the_title(); ?></h2>
        </a>
        <p class="blog-post-meta">
          <?php the_time('F j, Y g,:i a'); ?> 
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>" >
              <?php the_author(); ?> 
            </a>
        </p>
        <?php if(has_post_thumbnail()) : ?>
        <div class="post-thumb1">
          <?php the_post_thumbnail(); ?>
          </div>
        <?php endif; ?>  
        <div class="single-content">
          <?php the_content(); ?>
        </div>
        
          <hr>
          <?php comments_template(); ?>
        
          <?php endwhile; ?>
          <?php else : ?>
        <p>
            <?php  __('no post found'); ?>
         </p>
            <?php endif; ?>
            
  
      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
      </nav>

   <div class="wrapper">
        <aside class="col-md-4 blog-sidebar">
          
          <?php if(is_active_sidebar('sidebar')): ?>
            <?php dynamic_sidebar('sidebar'); ?>
          <?php endif; ?>

          
        </aside><!-- /.blog-sidebar -->
    </div>

  </div><!-- /.row -->

</main><!-- /.container -->
<style>
    .box{
      padding:0px;
      border:#fff 0px solid;
    }
    </style>


<?php get_footer() ?>