<?php
include = "db.php";
$result = mysqli_query($induction,"SELECT ")
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Balsamiq Sans&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Маги Ап</title>
</head>
<body>
    <header>
            <div class="logo">
                <p class="logo1">Маги <span class="logo2">Ап</span></p>
                <p class="logotxt">Мы в ответе за тех, кого приручили</p>
            </div>
            <nav>
                <div class="topnav" id="TopNav">
                    <a href="index.html">Главная</a>
                    <a href="buy.html">Купить щенка</a>
                    <a href="breed.html">О породах</a>
                    <a href="news.html">Новости</a>
                    <a href="contacts.html">Контакты</a>
                    <a id="menu" href="#" class="icon">&#9776;</a>
                </div>
                <p class="phone">Тел. 8-928-104-76-48</p>
            </nav>
            <div class="icons">
            <a href=""><img src="../img/phone.png"/></a>
            <a href=""><img src="../img/heart.svg"/></a>
            <a href=""><img src="../img/user.png"/></a>
            </div>
        </header>
    <main>

    <div class="main">
        <div class="main-txt">
        <h1>Не только людям нужен дом</h1>
        <p>Каждый может сделать собаку счастливой</p>
        <button class="main-but" onclick= "window.location.href = 'buy.html';">Перейти к выбору</button>
        </div>
        <img src="../img/main dog.png" class="md" height="600px" width="600px">  
    </div>
    <h2 class="h2in">Информация о наших щенках</h2> 
        <div class="inf-tbl">
                <div class="inf">
                    <img src="../img/doc.png" width="200px" height="200px">
                    <p>Наши щенки имеют 
                    документы РКФ</p>
                </div>
                <div class="inf">
                    <img src="../img/exp.png" width="200px" height="200px">
                    <p>Каждый щенок прошёл 
                    экспертизу у судьи 
                    по экстерьеру</p>
                </div>
                <div class="inf">
                    <img src="../img/test.png" width="200px" height="200px">
                    <p>Родители щенков проходят 
                    ген. тесты на заболевания, 
                    к которым склонна порода</p>
                </div>
        </div> 
    <h2 class="h2in">Обращение к покупателям</h2>
    <div class="obr">
        <div class="vst">
            <img src="../img/logo.png" height="350px" width="350px">
            <p>« Друзей не выбирают ради моды.
                Ведь красота душевная без лиц. 
                И верность не зависит от породы. 
                А преданность собачья без границ…»
                </p>
        </div>
        <p>Уважаемые потенциальные владельцы щенков – будьте внимательны и терпеливы к щенку. 
            Уделяйте время, играйте, учитесь, гуляйте, своевременно обращайте внимание на здоровье любимца. Все то, что вы заложите в щенка - со временем даст результат. Это будет отражение Вашего труда и стараний. Если что то не получается, возникли вопросы, я всегда рада Вас слышать и видеть, ведь я помню каждый вздох своего ребенка-щенка.
             
            За чудесными глазками и пушистой шерсткой находится  ЖИВОЙ ОРГАНИЗМ и  НЕРВНАЯ СИСТЕМА. Любому ответственному и любящему свое дело заводчику небезразлична судьба своих «выпускников».
            
            ПРОСЬБА ЩЕНКА:
            
            1)   В любом трудном деле старайся быть рядом со мной.
            2)   Выращивай во мне доверие к себе - я буду жить им.
            3)   Старайся дать мне время подумать, чего ты требуешь от меня.
            4)   Не сердись на меня долго и не запирай меня в наказание! Ведь у тебя есть еще и работа, и развлечения, и друзья - у меня же есть только ты.
            5)   Разговаривай  со мной. 
            6)   Прежде, чем меня ударить, подумай о том, что я тебя люблю больше, чем себя.
            7)   Помни - я никогда не забуду, как со мной обращаются.
            8)   Заботься обо мне, когда я состарюсь - ведь и ты когда-то будешь старым.
            10) Я буду жить всего лишь лет десять. Любая разлука с тобой будет причинять мне страдания. 
            РЯДОМ С ТОБОЙ МНЕ ВСЕГДА БУДЕТ ЛЕГЧЕ!!! 
            
            Подойдите к выбору щенка ответственно –
            и ВАШ щенок обязательно найдет к вам дорогу . 
            
            Я искренне Вам желаю много счастливых совместных дней и минут. 
            Радуйтесь жизни, любите, просто живите.
            
            «На землю роняя прохладу дождей,
            их души собачьи летают над нами,
            вселяясь в хороших и добрых людей….».
            
            С уважением к Вам, Илюхина Нелли
            
        </p>
    </div> 
</main>
    <footer>
        <div class="foot">
            <img src="../img/logoooo.jpg" width="100px" height="100px">
            <p>By Osipenko & Didenko</p>
            <p> Телефон для связи: 8-928-104-76-48</p>
        </div>
    </footer> 
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="../js/main.js"></script>  
</body>
</html>