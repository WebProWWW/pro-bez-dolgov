<?php

use yii\helpers\StringHelper;
use app\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $city app\models\City */

$this->title = $model->title;

$this->params['description'] = $model->description;

$this->params['breadcrumbs'] = [
    [
        'url' => ['site/index', 'view' => 'novosti-po-bankrotstvu'],
        'label' => 'Новости по банкротству физических лиц г. ' . $city->name,
    ],
];

?>
<section class="section">
    <div class="container">
        <h1 class=""><?= $model->title ?></h1>
        <p><span class="date-bg"><?= $model->date ?></span></p>
        <div class="editor">
            <img width="300" height="240" style="margin: 0 15px 15px 0; float: left;" src="<?= $model->image ?>">
            <div>
                <?= $model->content ?>
            </div>
        </div>
    </div><!-- .container -->
</section><!-- .section -->

<?php if ($news = $model->lastNews): ?>
<section class="section bg">
    <div class="container">
        <h2 class="h1 center">Актуальные новости по банкротству физических лиц г.&nbsp;<?= $city->name ?></h2>
        <div class="row">
        <?php foreach ($news as $newsItem): ?>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-img-header">
                        <img class="cart-img" src="<?= $newsItem->image ?>">
                    </div>
                    <div class="cart-body">
                        <h4><?= StringHelper::truncate($newsItem->title, 100) ?></h4>
                        <p><?= StringHelper::truncate($newsItem->description, 160) ?></p>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted em-9"><?= $newsItem->date ?></p>
                            </div>
                            <div class="col-auto col-sm-3 col-md-4 col-lg-5">
                                <a class="btn btn-sm btn-default" href="<?= Url::to([
                                    'site/news-item',
                                    'alias' => $newsItem->alias
                                ]) ?>">Читать</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->
        <?php endforeach; ?>
        </div><!-- .container -->
</section><!-- .section -->
<?php endif; ?>