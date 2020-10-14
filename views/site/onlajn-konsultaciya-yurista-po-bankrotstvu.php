<?php

/* @var $this yii\web\View */
/* @var $city app\models\City */

$this->title = 'Бесплатная юридическая консультация по банкротству физических лиц в г. '.$city->name;

$this->params['description'] = 'В рамках программы по оказанию бесплатной первичной юридической помощи гражданам РФ наш сайт совместно с Российской коллегией адвокатов представляет сервис «Бесплатной консультации юриста по банкротству».';

$this->params['breadcrumbs'] = [
    'Бесплатная юридическая консультация. г.&nbsp;'.$city->name,
];

?>
<section class="section bg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-10 mx-auto">
                <h1 class="center">Бесплатная юридическая консультация по банкротству физических лиц&nbsp;в&nbsp;г.&nbsp;<?= $city->name ?></h1>
            </div>
        </div>
        <p>В рамках программы по оказанию первичной юридической помощи гражданам РФ сайт «Без Кредитов» представляет сервис <strong>«Бесплатной консультации юриста по банкротству»</strong>.</p>
        <p>Вы можете обратиться со своими вопросами напрямую дежурному юристу через окно онлайн-чата или задать свой вопрос по телефонам горячей линии:</p>
        <p>Бесплатный многоканальный номер для всехрегионов РФ:</p>
        <p class="h1">
            <a class="ln-black-primary" href="tel:88005057629">8 (800) 505-76-29</a>
        </p>
        <p>Также вы можете заказать <strong>«Обратный звонок»</strong>. Для этого отправьте свой вопрос, заполнив форму ниже и вам перезвонит юрист на указанный номер.</p>

        <?= $this->render('-form-consult') ?>
        <div class="my-4"></div>

    </div><!-- .container -->
</section><!-- .section -->