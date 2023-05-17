<?php
/**
 * Template Name: Blog
 * Description: Custom template for the blog page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

// Get header
get_header();
?>

<!-- Custom HTML for the blog page -->
<div class="blog-page">
  <h1>Blog</h1>
  <p>Welcome to our blog!</p>
  
  <!-- Custom HTML for the blog post loop -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="blog-post">
      <h2><?php the_title(); ?></h2>
      <div class="blog-post-content">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; endif; ?>
  
  <!-- Custom HTML for pagination -->
  <div class="pagination">
    <?php echo paginate_links(); ?>
  </div>
</div>

<?php
// Get footer
get_footer();
?>
