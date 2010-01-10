<?php get_header(); ?>
<div id="content">
    <div id="contentleft">
        <h1>Archives</h1>
        <div id="archives-list">
        <?php  $allPosts = get_posts('orderby=date&order=DESC'); ?>
        <?php foreach ($allPosts as $post): ?>
            <?php setup_postdata ($post); ?>
            <?php $thisPostDate = the_date('F Y', '', '', false); ?>
            <?php if (isset($curDate) && $curDate !== $thisPostDate): ?>
                </ul>
            <?php endif; ?>
            
            
                
            <?php if (!isset($curDate) || $curDate !== $thisPostDate): ?>
                <div class="archives-section"><?php the_time('F Y'); ?></div>
                <ul>
                <?php $curDate = $thisPostDate; ?>
            <?php endif; ?>
            <li>
            <span class="bold"><?php the_time('d'); ?></span> : 
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php 
                $cats = array();
                foreach((get_the_category()) as $category) {
                    $cats[] = strtolower($category->cat_name) ;
                } 
                
            ?>
            <span class="lighter"><?php echo implode(', ', $cats); ?></span>
            
            </li>
        <?php endforeach; ?>
        </ul>
        </div>
    </div>
    <?php include(TEMPLATEPATH."/r_sidebar.php");?>
</div>

<?php get_footer(); ?>