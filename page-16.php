<?=get_header();?>

    <h1 class="conth1">Наши контакты:</h1>
    <div class="contact">
    <a href="<?= get_field('instagram','option');?>"><img src="/wp-content/themes/MagyUp/img/inst.svg" width="250px" height="250px"></a>
    <a href="<?= get_field('whatsapp','option');?>" class="whats"><img src="/wp-content/themes/MagyUp/img/whats.svg" width="260px" height="260px"></a>
    <a href="<?= get_field('vkontakte','option');?>"><img src="/wp-content/themes/MagyUp/img/vk.png" width="250px" height="250px"></a>
    </div>
     <h1 class="conth1">Вы можете позвонить нам или заказать обратный звонок:</h1>
    <div class="call">
    <p>Телефон для связи: <span><?= get_field('telefon','option');?></span></p>
     <div id="okno">
      <?=do_shortcode('[contact-form-7 id="5" title="Контактная форма 1"]');?><br>
      <a href="#" class="close">Закрыть окно</a>
    </div>
    <button><a href="#okno">Обратный звонок</a></button>
    </div>
    <h1 class="conth1">А также написать нам электронное письмо:</h1>
    <p class="em">E-mail:   <a href=""><?= get_field('email','option');?></a></p>
<?=get_footer();?>