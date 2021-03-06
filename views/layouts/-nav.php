<?php

use yii\helpers\Url;

/* @var $city app\models\City */
/* @var $this yii\web\View */
/* @var $id string */

if (!isset($id)) $id = Yii::$app->security->generateRandomString(8);

?>
<div class="toggle toggle-lg-disable" id="<?= $id ?>">
    <nav class="nav">
        <a class="nav-ln col-12 col-sm-6 col-xl-4" href="<?= Url::to(['site/index', 'view' => 'rejting-kompanij-po-bankrotstvu']) ?>">
            <i class="i-stat nav-i"></i>
            <span class="nav-txt">Рейтинг компаний по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
        </a>
        <a class="nav-ln col-12 col-sm-6 col-xl" href="<?= Url::to(['site/index', 'view' => 'onlajn-konsultaciya-yurista-po-bankrotstvu']) ?>">
            <i class="i-msg-b nav-i"></i>
            <span class="nav-txt">Онлайн консультация юриста по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
        </a>
        <a class="nav-ln col-12 col-sm-6 col-xl-3" href="<?= Url::to(['site/index', 'view' => 'zakon-o-bankrotstve']) ?>">
            <i class="i-bal nav-i"></i>
            <span class="nav-txt">Закон о банкротстве</span>
        </a>

        <!-- ROW -->

        <a class="nav-ln col-12 col-sm-6 col-xl-4" href="<?= Url::to(['site/arbitration-list', 'page' => 1]) ?>">
            <i class="i-stat nav-i"></i>
            <span class="nav-txt">Рейтинг арбитражных управляющих в&nbsp;г.&nbsp;<?= $city->name ?></span>
        </a>
        <a class="nav-ln col-12 col-sm-6 col-xl" href="<?= Url::to(['site/index', 'view' => 'poleznye-materialy-po-bankrotstvu']) ?>">
            <i class="i-heart nav-i"></i>
            <span class="nav-txt">Полезные материалы по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
        </a>
        <a class="nav-ln col-12 col-sm-6 col-xl-3" href="<?= Url::to(['site/index', 'view' => 'uznat-svoi-dolgi']) ?>">
            <i class="i-hph nav-i"></i>
            <span class="nav-txt">Узнать свои долги г.&nbsp;<?= $city->name ?></span>
        </a>

        <!-- ROW -->

        <a class="nav-ln col-12 col-sm-6 col-xl-4" href="<?= Url::to(['site/index', 'view' => 'ufssp-rossii']) ?>">
            <i class="i-star nav-i"></i>
            <span class="nav-txt">УФССП России по&nbsp;г.&nbsp;<?= $city->name ?></span>
        </a>
        <a class="nav-ln col-12 col-sm-6 col-xl" href="<?= Url::to(['site/index', 'view' => 'otzyvy-lyudej-proshedshih-proceduru-bankrotstva']) ?>">
            <i class="i-mgs-a nav-i"></i>
            <span class="nav-txt">Отзывы людей прошедших процедуру банкротства в&nbsp;&nbsp;г.&nbsp;<?= $city->name ?></span>
        </a>
        <a class="nav-ln col-12 col-sm-6 col-xl-3" href="<?= Url::to(['site/index', 'view' => 'obratnaya-svyaz']) ?>">
            <i class="i-hph nav-i"></i>
            <span class="nav-txt">Обратная связь</span>
        </a>

        <!-- ROW -->

        <a class="nav-ln col-12 col-sm-6 col-xl-4" href="<?= Url::to(['site/index', 'view' => 'novosti-po-bankrotstvu']) ?>">
            <i class="i-mgs-a nav-i"></i>
            <span class="nav-txt">Новости по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
        </a>
        <a class="nav-ln col-12 col-sm-6 col-xl" href="<?= Url::to(['site/index', 'view' => 'vopros-otvet-po-bankrotstvu-fizicheskih-lic']) ?>">
            <i class="i-mgs-a nav-i"></i>
            <span class="nav-txt">Вопрос-ответ по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></span>
        </a>
        <a class="nav-ln col-12 col-sm-6 col-xl-3" href="<?= Url::to(['site/index', 'view' => 'o-proekte']) ?>">
            <i class="i-star nav-i"></i>
            <span class="nav-txt">О проекте</span>
        </a>
    </nav>
</div><!-- .toggle -->