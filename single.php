<?=get_header();?>

        <div class="bodynews">

        <div class="news">
           <a href="<?= the_permalink(); ?>"><img src="<?= the_post_thumbnail_url(); ?>" alt=""> </a> 
            <div class="newstxt">
               <h3><?= the_title(); ?></h3>
               <p><?= the_content(); ?></p>
               <p class="date"><?php the_date(); ?></p>
            </div>
        </div>
        </div>
<?=get_footer();?>