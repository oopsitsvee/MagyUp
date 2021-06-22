<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Balsamiq Sans&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/MagyUp/css/style.css">
    <link rel="shortcut icon" href="/wp-content/themes/MagyUp/img/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Маги Ап</title>
</head>
<body>
    <div class="cookie_notice">
        Этот сайт использует файлы cookies и сервисы сбора технических данных посетителей (данные об IP-адресе, местоположении и др.) для обеспечения работоспособности и улучшения качества обслуживания. Продолжая использовать наш сайт, вы автоматически соглашаетесь с использованием данных технологий.
        <div>
            <a class="cookie_btn" id="cookie_close" href="#close">Согласиться</a>
            <a class="cookie_btn" href="/privacy-policy">Политика конфиденциальности</a>
        </div>
    </div>
    <header >
        <div class="header">
        <div class="logo">
            <a href="#" class="logo1">Маги <span class="logo2">Ап</span></a>
            <p class="logotxt">Мы в ответе за тех, кого приручили</p>
        </div>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
          <li><a href="/">Главная</a></li>
          <li><a href="/katalog">Каталог</a></li>
          <li><a href="/o-porodah">О породах</a></li>
          <li><a href="/novosti">Новости</a></li>
          <li><a href="/kontakty">Контакты</a></li>
		  <li><div id="okno">
      <?=do_shortcode('[contact-form-7 id="5" title="Контактная форма 1"]');?><br>
      <a href="#" class="close">Закрыть окно</a>
    </div>
    <a href="#okno"><img src="/wp-content/themes/MagyUp/img/phone.png"/></a></li>
          <li><a href=""><img src="/wp-content/themes/MagyUp/img/heart.svg"></a></li>
          <li><div id="okno2">
              <?=do_shortcode('[wppb-register]');?><br>
          <a href="#" class="close">Закрыть окно</a>
    </div>
    <a href="#okno2"><img src="/wp-content/themes/MagyUp/img/user.png"></a></li>                       
        </ul>
        </div>
      </header>
          <main>