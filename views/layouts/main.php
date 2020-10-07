<?php

use yii\helpers\Url;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $content string */

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="date=no">
    <meta name="format-detection" content="address=no">
    <meta name="format-detection" content="email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <?php $this->registerCsrfMetaTags() ?>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.depends.css?v=011">
    <link rel="stylesheet" href="css/main.css?v=013">
    <title>Без кредитов</title>
    <?php $this->head() ?>
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?= Yii::$app->request->hostInfo ?>/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= Yii::$app->request->hostInfo ?>/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= Yii::$app->request->hostInfo ?>/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= Yii::$app->request->hostInfo ?>/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?= Yii::$app->request->hostInfo ?>/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= Yii::$app->request->hostInfo ?>/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="<?= Yii::$app->request->hostInfo ?>/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?= Yii::$app->request->hostInfo ?>/favicon-16x16.png" sizes="16x16">
    <meta name="application-name" content="Без кредитов">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="<?= Yii::$app->request->hostInfo ?>/mstile-144x144.png">

</head>
<body>
<?php $this->beginBody() ?>

<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center no-gutters">
                <div class="col-auto">
                    <div class="d-flex">
                        <div class="mr-2">
                            <a class="i-circle-blue-ln" href="">
                                <i class="i-vk"></i>
                            </a>
                        </div>
                        <div>
                            <a class="i-circle-dblue-ln" href="">
                                <i class="i-f"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col pl-3">
                    <p>Отзывы людей прошедших банкротство физических лиц - каждый день!</p>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .header-top -->
    <div class="header-body">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-auto mx-auto">
                    <a class="logo" href="<?= Url::home() ?>">
                        <span class="logo-txt">Без кредитов</span>
                        <span class="logo-stxt">Портал города Москвы по банкротству <br>физических лиц</span>
                    </a>
                    <p class="center em-9">
                    <span class="row justify-content-center no-gutters">
                        <span class="col-12 col-sm-auto mr-2">
                            <span class="fw-600">Выберите свой город:</span>
                        </span>
                        <span class="col-12 col-sm-auto">
                            <a data-fancybox href="#cities">Москва</a>
                        </span>
                    </span>
                    </p>
                </div><!-- .col -->
                <div class="col-12 col-lg">
                    <?= $this->render('-nav') ?>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .header-body -->
</header>

<?php if ($breadcrumbs = ArrayHelper::getValue($this->params, 'breadcrumbs', [])): ?>
    <section class="section">
        <div class="container">
            <nav class="breadcrubmbs">
                <a class="breadcrubmbs-ln" href="<?= Url::home() ?>">
                    <i class="i-home"></i> Главная
                </a>
                <?php foreach ($breadcrumbs as $breadcrumb): ?>
                    <?php if (is_array($breadcrumb)):?>
                        <a class="breadcrubmbs-ln" href="<?= Url::to($breadcrumb['url']) ?>">
                            <?= $breadcrumb['label'] ?>
                        </a>
                    <?php elseif (is_string($breadcrumb)): ?>
                        <span class="breadcrubmbs-ln">
                            <?= $breadcrumb ?>
                        </span>
                    <?php endif; ?>
                <?php endforeach; ?>
            </nav>
        </div><!-- .container -->
    </section><!-- .section -->
<?php endif; ?>

<?= $content ?>

<footer class="section">
    <div class="container">
        <div class="row">
            <div class="col-auto mx-auto">
                <a class="logo" href="<?= Url::home() ?>">
                    <span class="logo-txt">Без кредитов</span>
                    <span class="logo-stxt">Портал города Москвы по банкротству <br>физических лиц</span>
                </a>
            </div><!-- .col -->
            <div class="col-12 col-lg">
                <?= $this->render('-nav') ?>
            </div><!-- .col -->
        </div><!-- .row -->
        <br>
        <p class="center"><small>&copy; Без кредитов. При воспроизведении редакционных материалов сайта обязательна установка активной гиперссылки на источник - страницу с этой публикацией на безкредитов.рф</small></p>
    </div><!-- .container -->
</footer><!-- .section -->

<!-- МОДАЛЬНЫЕ ОКНА -->
<div class="d-none">

<!-- СПИСОК ГОРОДОВ -->
<div class="modal em-9" id="cities">
    <div class="row">
        <div class="col-12"><p class="mb-2 fw-600">А</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Абакан</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Азов</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Александров</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Алексин</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Альметьевск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Анапа</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Ангарск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Анжеро-Судженск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Апатиты</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Арзамас</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Армавир</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Арсеньев</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Артем</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Архангельск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Асбест</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Астрахань</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Ачинск</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Б</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Балаково</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Балахна</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Балашиха</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Балашов</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Барнаул</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Батайск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Белгород</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Белебей</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Белово</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Белогорск (Амурская область)</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Белорецк</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Белореченск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Бердск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Березники</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Березовский (Свердловская область)</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Бийск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Биробиджан</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Благовещенск (Амурская область)</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Бор</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Борисоглебск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Боровичи</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Братск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Брянск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Бугульма</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Буденновск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Бузулук</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Буйнакск</a></div>
        <div class="col-12"><p class="mb-2 fw-600">В</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Великие Луки</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Великий Новгород</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Верхняя Пышма</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Видное</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Владивосток</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Владикавказ</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Владимир</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Волгоград</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Волгодонск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Волжск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Волжский</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Вологда</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Вольск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Воркута</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Воронеж</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Воскресенск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Воткинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Всеволожск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Выборг</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Выкса</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Вязьма</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Г</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Гатчина</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Геленджик</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Георгиевск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Глазов</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Горно-Алтайск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Грозный</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Губкин</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Гудермес</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Гуково</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Гусь-Хрустальный</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Д</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Дербент</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Дзержинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Димитровград</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Дмитров</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Долгопрудный</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Домодедово</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Донской</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Дубна</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Е</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Евпатория</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Егорьевск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Ейск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Екатеринбург</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Елабуга</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Елец</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Ессентуки</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Ж</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Железногорск (Красноярский край)</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Железногорск (Курская область)</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Жигулевск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Жуковский</a></div>
        <div class="col-12"><p class="mb-2 fw-600">З</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Заречный</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Зеленогорск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Зеленодольск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Златоуст</a></div>
        <div class="col-12"><p class="mb-2 fw-600">И</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Иваново</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Ивантеевка</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Ижевск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Избербаш</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Иркутск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Искитим</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Ишим</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Ишимбай</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Йошкар-Ола</a></div>
        <div class="col-12"><p class="mb-2 fw-600">К</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Казань</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Калининград</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Калуга</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Каменск-Уральский</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Каменск-Шахтинский</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Камышин</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Канск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Каспийск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Кемерово</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Керчь</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Кинешма</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Кириши</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Киров (Кировская область)</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Кирово-Чепецк</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Киселевск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Кисловодск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Клин</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Клинцы</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Ковров</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Когалым</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Коломна</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Комсомольск-на-Амуре</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Копейск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Королев</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Кострома</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Котлас</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Красногорск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Краснодар</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Краснокаменск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Краснокамск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Краснотурьинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Красноярск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Кропоткин</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Крымск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Кстово</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Кузнецк</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Кумертау</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Кунгур</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Курган</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Курск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Кызыл</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Л</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Лабинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Лениногорск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Ленинск-Кузнецкий</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Лесосибирск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Липецк</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Лиски</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Лобня</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Лысьва</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Лыткарино</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Люберцы</a></div>
        <div class="col-12"><p class="mb-2 fw-600">М</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Магадан</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Магнитогорск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Майкоп</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Махачкала</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Междуреченск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Мелеуз</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Миасс</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Минеральные Воды</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Минусинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Михайловка</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Михайловск (Ставропольский край)</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Мичуринск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Москва</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Мурманск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Муром</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Мытищи</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Н</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Набережные Челны</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Назарово</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Назрань</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Нальчик</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Наро-Фоминск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Находка</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Невинномысск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Нерюнгри</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Нефтекамск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Нефтеюганск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Нижневартовск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Нижнекамск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Нижний Новгород</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Нижний Тагил</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Новоалтайск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Новокузнецк</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Новокуйбышевск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Новомосковск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Новороссийск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Новосибирск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Новотроицк</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Новоуральск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Новочебоксарск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Новочеркасск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Новошахтинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Новый Уренгой</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Ногинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Норильск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Ноябрьск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Нягань</a></div>
        <div class="col-12"><p class="mb-2 fw-600">О</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Обнинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Одинцово</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Озерск (Челябинская область)</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Октябрьский</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Омск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Орел</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Оренбург</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Орехово-Зуево</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Орск</a></div>
        <div class="col-12"><p class="mb-2 fw-600">П</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Павлово</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Павловский Посад</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Пенза</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Первоуральск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Пермь</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Петрозаводск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Петропавловск-Камчатский</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Подольск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Полевской</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Прокопьевск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Прохладный</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Псков</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Пушкино</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Пятигорск</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Р</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Раменское</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Ревда</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Реутов</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Ржев</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Рославль</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Россошь</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Ростов-на-Дону</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Рубцовск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Рыбинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Рязань</a></div>
        <div class="col-12"><p class="mb-2 fw-600">С</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Салават</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Сальск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Самара</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Санкт-Петербург</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Саранск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Сарапул</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Саратов</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Саров</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Свободный</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Севастополь</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Северодвинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Северск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Сергиев Посад</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Серов</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Серпухов</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Сертолово</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Сибай</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Симферополь</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Славянск-на-Кубани</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Смоленск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Соликамск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Солнечногорск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Сосновый Бор</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Сочи</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Ставрополь</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Старый Оскол</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Стерлитамак</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Ступино</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Сургут</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Сызрань</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Сыктывкар</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Т</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Таганрог</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Тамбов</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Тверь</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Тимашевск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Тихвин</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Тихорецк</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Тобольск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Тольятти</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Томск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Троицк</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Туапсе</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Туймазы</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Тула</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Тюмень</a></div>
        <div class="col-12"><p class="mb-2 fw-600">У</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Узловая</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Улан-Удэ</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Ульяновск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Урус-Мартан</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Усолье-Сибирское</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Уссурийск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Усть-Илимск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Уфа</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Ухта</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Ф</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Феодосия</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Фрязино</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Х</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Хабаровск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Ханты-Мансийск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Хасавюрт</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Химки</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Ч</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Чайковский</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Чапаевск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Чебоксары</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Челябинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Черемхово</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Череповец</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Черкесск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Черногорск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Чехов</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Чистополь</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Чита</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Ш</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Шадринск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Шали</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Шахты</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Шуя</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Щ</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Щекино</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Щелково</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Э</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Электросталь</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Элиста</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Энгельс</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Ю</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Южно-Сахалинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Юрга</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Я</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Якутск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Ялта</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="">Ярославль</a></div>
    </div><!-- .row -->
</div><!-- .modal -->
<!-- / СПИСОК ГОРОДОВ -->

</div><!-- .d-none -->
<!-- / МОДАЛЬНЫЕ ОКНА -->

<script src="js/main.depends.js?v=011"></script>
<script src="js/main.js?v=011"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>