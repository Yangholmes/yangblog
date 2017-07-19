<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage yangholmes
 * @since 1.0
 * @version 1.2
 */
?>

<article class="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <!-- 置顶标识 -->
  <div class="sticky-post">
    <?php
    if ( is_sticky() && is_home() ) { // 是否置顶文章
        echo '<span class="fa fa-thumb-tack">[置顶]</span>';
    }
    ?>
  </div>
  <!-- 置顶标识 -->
  <!-- 文章标题和元数据 -->
  <div class="article-header">
    <h2 class="post-title">
      <a class="post-title-permalink post-permalink" href="<?php echo get_post_permalink(); ?>"><?php echo get_the_title(); ?></a>
    </h2>
    <div class="post-meta">
      <div class="post-create-dt"><?php echo get_post_time('Y-m-d H:i'); ?></div>
      <div class="post-tags"><?php echo the_tags( null, ', ' ); ?> </div>
    </div>
  </div>
  <!-- 文章标题和元数据 -->
  <!-- 文章摘要 -->
  <div class="post-excerpt">
    <?php
    if ( is_archive() || is_search() || is_home() ){
      // wp_trim_excerpt();不支持中文, 随弃用.
      if( !get_the_excerpt() )
        $excerpt = get_the_content('', true);
      else
        $excerpt = get_the_excerpt();
      // echo mb_substr($excerpt, 0, 100).'<a class="read-more post-permalink" href="'.get_post_permalink().'"> 查看全文 </a>';
      echo '<a class="read-more post-permalink" href="'.get_post_permalink().'">'.mb_substr($excerpt, 0, 150).'...</a>';
      // echo get_post_permalink();
    }
    ?>
  </div>
  <!-- 文章摘要 -->
  <!-- 评论与分享 -->
  <div class="comments-share">
    <a href="" class="share">
      <span class="fa fa-share"></span>
    </a>
    <a href="<?php echo get_post_permalink().'/#comment'; ?>" class="comments">
      <span class="fa fa-comment"><?php echo get_comments_number(); ?></span>
    </a>
  </div>
  <!-- 评论与分享 -->

</article>
