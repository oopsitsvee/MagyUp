<?=get_header();?>

        <div class="bodynews">
            
        <?php
            while ( have_posts() ) :
                the_post();
        ?>
        <div class="news">
           <img src="<?= the_post_thumbnail_url(); ?>" alt="">
            <div class="newstxt">
               <h3><?= the_title(); ?></h3>
               <p><?= the_content(); ?></p>
               <p class="date"><?php the_date(); ?></p>
            </div>
        </div>

       <?php endwhile; ?>
        </div>
<?=get_footer();?>