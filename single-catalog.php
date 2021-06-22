<?=get_header();?>
<main>
<div class="slideshow-container">

    <div class="mySlides fade">
      <img src="<?= the_field('slaid'); ?>" style="width:100%">
    </div>
  
    <div class="mySlides fade">
      <img src="<?= the_field('slaid'); ?>" style="width:100%">
    </div>
  
    <div class="mySlides fade">
      <img src="<?= the_field('slaid'); ?>" style="width:100%">
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <div class="dots" style="text-align:left">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
<div class="names">
<h2><?=the_title();?>
<img src="<?= the_field('photo'); ?>" width="20px" height="20px"></h2>
<p><?= the_content(); ?></p>
    <a href="#" class="save">Сохранить в "Понравившиеся"</a>
<p class="tel">Телефон для связи: 8-928-104-76-48</p>
</div>
</main>
<?=get_footer();?>