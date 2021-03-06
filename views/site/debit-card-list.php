<?php

use yii\helpers\ArrayHelper;
use app\helpers\Url;
use app\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $city app\models\City */
/* @var $model app\models\Unicom */
/* @var $tags app\models\UnicomTag[] */
/* @var $tagTiles  app\models\UnicomTag */
/* @var $popTags  app\models\UnicomTag[] */

$this->title = str_replace('%offer_count%', $model->offersCount, $model->page->title);
$this->params['description'] = $model->page->description;

$this->params['breadcrumbs'] = ($model->page->url !== '/debetovye-karty') ? [
    [
        'label' => 'Дебетовые карты',
        'url' => ['site/debit-card-list', 'page' => 1]
    ],
    $model->page->breadcrumbTitle,
] : [
    $model->page->breadcrumbTitle
];

$tags = ArrayHelper::getValue($model, 'page.linkingFields', []);

$tagTiles = null;
$popTags = [];

foreach ($tags as $tag) {
    if ($tag->displayLocation === 'tag_tiles') {
        $tagTiles = $tag;
    }
    if ($tag->displayLocation === 'popular_offers') {
        $popTags[] = $tag;
    }
}

?>

<section class="section" style="position: relative; overflow: hidden; background: #C4C9DD;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <h1><?= $model->page->h1 ?></h1>
                <div><?= str_replace('%offer_count%', $model->offersCount, $model->page->shortContent) ?></div>
            </div><!-- .col -->
            <div class="col-12 col-md-6">
                <img class="img-center" width="400" src="/img/img-49.jpg" style="margin-bottom: -11px;">
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<?php if ($tagTiles): ?>
    <section class="section">
        <div class="container">
            <div class="row no-gutters justify-content-lg-between" style="margin: 0 -3px">
                <?php foreach ($tagTiles->anchors as $anchor): ?>
                    <div class="col-auto" style="margin: 0 3px">
                        <a
                            class="btn-trsp btn-sm px-2 <?= ($anchor->path === $model->path) ? 'active' : '' ?>"
                            style="font-size: .75em"
                            href="<?= Url::to([
                                'site/debit-card-list',
                                'alias' => $anchor->alias,
                                'page' => 1,
                            ]) ?>"
                        >
                            <?= $anchor->name ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .section -->
<?php endif; ?>

<?= $this->render('debit-card-list-item', [
    'title' => 'Рекомендуем '.$model->page->recommendedKey,
    'offers' => $model->offersRecommend,
]) ?>

<?= $this->render('debit-card-list-item', [
    'title' => 'Подобрать '.$model->page->selectedKey,
    'pagination' => $model->pagination,
    'offers' => $model->offers,
]) ?>

<section class="section bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-stat"></i>
                        </div>
                        <h3>Узнайте свой кредитный рейтинг</h3>
                        <p class="my-auto pb-3">Один из главных показателей, который оценивается банками при решении о предоставлении займа.</p>
                        <div class="row">
                            <div class="col-auto mx-auto">
                                <p><a class="btn-default" href="javascript:;">Узнать рейтинг</a></p>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-safe"></i>
                        </div>
                        <h3>Защитите свою кредитную историю</h3>
                        <p class="my-auto pb-3">Сервис поможет сберечь от лишних уплат по просрочкам, а также от действий кредитных мошенников.</p>
                        <div class="row">
                            <div class="col-auto mx-auto">
                                <p><a class="btn-default" href="javascript:;">Защитить кредит</a></p>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-card"></i>
                        </div>
                        <h3>Полная кредитная история</h3>
                        <p class="my-auto pb-3">Информация о ваших кредитах, просрочках, обращениях в банки и МФО</p>
                        <div class="row">
                            <div class="col-auto mx-auto">
                                <p><a class="btn-default" href="javascript:;">Скачать историю</a></p>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->


<section class="section bg">
    <div class="container">
        <h2 class="h1"><?= $model->page->offerWallReviewsBlockHeader ?></h2>
        <div class="cart">
            <?php foreach ($model->reviews as $review): ?>
                <div class="cart-body">
                    <div class="row">
                        <div class="col-auto">
                            <img class="img" width="80" src="<?= $review->offer->logo ?>">
                        </div><!-- .col -->
                        <div class="col-12 col-md">
                            <h3 class="mb-1"><?= $review->offer->finmarketName ?></h3>
                            <p>
                                <i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>
                                <?= $review->name ?>
                            </p>
                        </div><!-- .col -->
                        <div class="col-12 col-md-auto">
                            <p><?= $review->created ?></p>
                        </div><!-- .col -->
                    </div><!-- .row -->
                    <p><?= $review->text ?></p>
                </div><!-- .cart-body -->

                <div class="divider mb-1 last-child-none"></div>
            <?php endforeach; ?>
        </div><!-- .cart -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 mb-4">
                <div class="cart">
                    <div class="cart-body center lg-left">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-auto">
                                <img class="img-center" width="70" src="/img/ava-man.svg">
                            </div><!-- .col -->
                            <div class="col-12 col-lg">
                                <h3 class="mb-1">Денис Беневольский</h3>
                                <p>04 дек. 2020</p>
                            </div><!-- .col-12 -->
                        </div><!-- .row -->
                        <h3 class="yellow">Как зарабатывать на дебетовой карте?</h3>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-sm-6 mb-4">
                <div class="cart">
                    <div class="cart-body center lg-left">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-auto">
                                <img class="img-center" width="70" src="/img/ava-man.svg">
                            </div><!-- .col -->
                            <div class="col-12 col-lg">
                                <h3 class="mb-1">Денис Беневольский</h3>
                                <p>01 дек. 2020</p>
                            </div><!-- .col-12 -->
                        </div><!-- .row -->
                        <h3 class="yellow">Как выбрать дебетовую карту?</h3>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <h2 class="h1"><?= $model->page->issueType ?></h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-stamp"></i>
                        </div>
                        <p>С помощью фильтров подберите лучшее предложение из доступных</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-hand"></i>
                        </div>
                        <p>Перед оформлением карты ознакомьтесь с условиями на странице предложения</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-edit"></i>
                        </div>
                        <p>Нажмите на кнопку “Оформить” и заполните анкету на сайте банка</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<?php if ($model->page->content): ?>
    <section class="section bg">
        <div class="container">
            <div class="cart mb-4 p-lg-3">
                <div class="cart-body">
                    <div class="editor">
                        <?= $model->page->content ?>
                    </div>
                </div><!-- .cart-body -->
            </div><!-- .cart -->
        </div><!-- .container -->
    </section><!-- .section -->
<?php endif; ?>

<?php if (is_array($popTags)): ?>
    <section class="section bg">
        <div class="container">
            <div class="cart mb-4 p-lg-3">
                <div class="cart-body">
                    <h2 class="h1">Популярные предложения</h2>
                    <?php foreach ($popTags as $popTag): ?>
                        <h3><?= $popTag->title ?></h3>
                        <div class="row">
                            <?php foreach ($popTag->anchors as $anchor): ?>
                                <div class="col-auto mb-3">
                                    <a href="javascript:;"><?= $anchor->name ?></a>
                                </div><!-- .col -->
                            <?php endforeach; ?>
                        </div><!-- .row -->
                    <?php endforeach; ?>
                </div><!-- .cart-body -->
            </div><!-- .cart -->
        </div><!-- .container -->
    </section><!-- .section -->
<?php endif; ?>