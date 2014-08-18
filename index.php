<?php
//header("HTTP/1.0 404 Not Found");
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: ".date(DATE_RFC822, mktime(date("H"), date("i")-1, date("s"), date("n"),   date("j"),   date("Y")))); // Just expired
header("Last-Modified: ".date(DATE_RFC822, mktime(date("H"), date("i")-1, date("s"), date("n"),   date("j"),   date("Y")))); // Just updated

/****************
* Routing
****************/
if(empty($_GET["section"])) {
	$section = "home";
} else {
	$section = $_GET["section"];
}

//readfile("sections/".$section."/index.html");
?>
<!DOCTYPE html>
<html lang="ru">

    <head>

        <title>Школа тайцзицюань, цигун и кунг-фу Хуана Тайчэна "ТайХэ"</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Школа тайцзицюань и цигун Хуана Тайчэна; Школа традиционного ушу (кунг-фу); Стиль тайхэцюань: Внутренний стиль боевых исскуств">
        <meta name="keywords" content="ушу, wushu, kung-fu, кун фу, кунг фу, тайцзи, тайцзы, тайчи, тайцзицюань, тай цзи цюань, цигун, чи гун, боевое исскуство, внутреннее боевое исскуство, внутренний стиль, тайхэцюань, Хуан Тайчэн, оздоровительная гимнастика, школа тайцзицюань, школа цигун, кунг-фу, ушу, традиционное ушу, секция ушу, клуб ушу, ушу для детей">
        <meta name="author" content="Alexander Chepur">
        <meta charset="utf-8">

        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
        <link href="css/flexslider.css" rel="stylesheet" media="screen">
        <link href="swipebox-master/source/swipebox.css" rel="stylesheet" media="screen">
        <link href="css/style.min.css" rel="stylesheet" media="screen">

        <script type="text/javascript" src="js/jquery.min.js"></script>

        <!--[if IE 7]>
        <link href="css/font-awesome-ie7.css" rel="stylesheet">
        <![endif]-->

        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <!--[if gte IE 9]>
        <style type="text/css">
        </style>
        <![endif]-->

    </head>

<body>

    <div id="background"></div>
    <div id="overlay"></div>

    <a id="back-top" href="javascript:void(0)"><i class="icon-chevron-up"></i></a>

    <!-- header -->
    <header id="header">
        <div class="container">
            <div class="row-fluid">
                <div class="span12">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>

                            <a class="brand" href="http://taichen.ru">
                                <h1 id="logo"><img src="./img/thqg.png" alt="Школа тайцзицюань, цигун и кунг-фу Хуана Тайчэна"></h1>
                            </a>

                            <div class="nav-collapse collapse">
                                <ul class="nav pull-right" id="navigation">
                                    <li><a data-nav="scroll" href="./home" class="active"><i class="icon-home"></i></a></li>
                                    <li><a data-nav="scroll" href="./news">НОВОСТИ</a></li>
                                    <li><a data-nav="scroll" href="./about">НАПРАВЛЕНИЯ</a></li>
                                    <li><a data-nav="scroll" href="./master">МАСТЕР</a></li>
                                    <li><a data-nav="scroll" href="./instructors">ПРЕПОДАВАТЕЛИ</a></li>
                                    <li><a data-nav="scroll" href="./video">ВИДЕО</a></li>
                                    <li><a data-nav="scroll" href="./photo">ФОТО</a></li>
                                    <li><a data-nav="scroll" href="./articles">СТАТЬИ</a></li>
                                    <li><a data-nav="scroll" href="./contact">КОНТАКТЫ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
            <div class="row-fluid">
                <div id="news-teaser" class="span3 pull-right">
                    <div class="news-teaser">
                        <div class="news-teaser-header pull-center">
                            <i class="icon-bell icon-large"></i> НОВОСТИ <button type="button" class="close">&times;</button>
                        </div>
                        <div class="news-teaser-content">
                            Начиная с 7 декабря, по субботам будут проходить занятия по тайцзи, посвященные изучению комплекса с веером (太极功夫扇). Сам комплекс можно посмотреть в разделе <a data-nav="scroll" href="./video">Видео</a>, а расписание занятий и место их проведения в разделе <a data-nav="scroll" href="./contact">Контакты</a>. Присоединяйтесь!
                        </div>
                    </div>
                </div>
            </div>
        	-->
        </div>
    </header>

    <!-- modal news -->
    <div id="news-modal" class="modal hide fade">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3>Курс для начинающих по тайцзи и цигун</h3>
        </div>
        <div class="modal-body">
            <p>Школа "ТайХэ" предлагает двухмесячный курс для начинающих  по тайцзи и цигун.</p>

            <p>На 8 занятиях по 1.5 часа будут изучаться:</p>
            <ul>
                <li>суставные и дыхательные упражнения,</li>
                <li>упражнения на растяжку,</li>
                <li>комплекс "Ба Дуан Цзин" ("8 кусков парчи")</li>
            </ul>

            <p>Регулярно выполняя эти упражнения, вы можете укрепить свое тело, успокоить ум, обрести долголетие, провести профилактику многих заболеваний. Курс рассчитан на начинающих заниматься тайцзи-цигун и желающих попробовать китайские оздоровительные практики и является ознакомительным.</p>

            <p>Занятия будет проводить мастер из Китая Хуан Тайчэн (5-й дуань Китайской ассоциации ушу).</p>

            <p>Занятия будут проходить по субботам недалеко от метро. Точное место и время будет уточнено по мере формирования группы. Вероятное время начала занятий 14:00 или 15:00. Возможные места проведения: недалеко от метро "Пл. Александра Невского", "Пушкинская" или "Чкаловская".</p>

            <p>Стоимость курса 3500 рублей.</p>

            <p>Количество мест в группе ОГРАНИЧЕНО! Спешите!</p>
            <p>Оплатившим курс заранее до начала занятий -- скидка 10%. Оплатить можно по адресу: Синопская наб. 30, лит. С, оздоровительный комплекс ФГУП ЦНИИ КМ "Прометей" по вторникам и четвергам с 19:00 до 19:30 или с 20:30 до 22:00.</p>

            <p>Телефон для справок и записи на курс: +7 952 218-3606</p>
        </div>
    </div>

    <!-- section -->
    <section id="<? echo $section; ?>" class="box">
        <div class="container">
            <div class="panel" style="display: none;">
				<? readfile("sections/".$section."/index.html"); ?>
            </div>
        </div>
    </section>

    <!-- lightbox -->
    <div style="display: none;" id="lightbox"><img id="bigimg" src="" /></div>

    <!-- scripts -->
    <script type="text/javascript" src="js/signals.min.js"></script>
    <script type="text/javascript" src="js/crossroads.min.js"></script>
    <script type="text/javascript" src="js/hasher.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/theme.js"></script>

</body>

</html>