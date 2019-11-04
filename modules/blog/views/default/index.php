<?php

use yii\helpers\Html;
use himiklab\thumbnail\EasyThumbnailImage;

/* @var $this yii\web\View */
/* @var $searchModel app\models\blog\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?><!--main content start-->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <h1 style="margin-top: -50px"></h1>
                <?php foreach ($posts as $arr) { ?>
                    <div class="col-md-16">
                            <article class="post">
                                <div class="post-thumb">
                                    <a href="/blog/default/view?id=<?= $arr->id ?>"><img src="<?=$arr->img?>" alt=""></a>

                                    <a href="/blog/default/view?id=<?= $arr->id ?>" class="post-thumb-overlay text-center">
                                        <div class="text-uppercase text-center">View Post</div>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <header class="entry-header text-center text-uppercase">
                                        <h1 class="entry-title"><a href="/blog/default/view?id=<?= $arr->id ?>"><?= $arr->title ?></a></h1>
                                    </header>
                                    <div class="entry-content">
                                        <p>
                                        <p><?= $arr->text_preview ?></p>
                                        </p>
                                        <div class="btn-continue-reading text-center text-uppercase">
                                            <?php if(!Yii::$app->user->getisGuest()){ ?>
                                                <?= Html::a('New Post', ['create'], ['class' => 'more-link']) ?>
                                            <?php } ?>
                                            <a href="/blog/default/view?id=<?= $arr->id ?>" class="more-link">Continue Reading</a>
                                            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                                            <?php if(!Yii::$app->user->getisGuest()){ ?>
                                                    <?= Html::a('Update', ['update', 'id' => $arr->id], ['class' => 'more-link']) ?>
                                                    <?= Html::a('Delete', ['delete', 'id' => $arr->id], [
                                                        'class' => 'more-link',
                                                        'data' => [
                                                            'confirm' => 'Are you sure you want to delete this item?',
                                                            'method' => 'get',
                                                        ],
                                                    ]) ?>
                                            <?php } ?>

                                        </div>
                                    </div>
                                    <div class="social-share">
                                        <span class="social-share-title pull-left text-capitalize">By <a href="#"><?php echo Yii::$app->user->identity->getUsername() ?></a> <?php echo date("Y-m-d H:i") ?></span>
                                        <ul class="text-center pull-right">
                                            <li><a class="s-facebook" href="https://www.instagram.com/imaginary.snow/"><i class="fa fa-eye"></i></a></li><?php
                                            $prr = rand(1,1000);
                                            echo $prr;
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- end main content-->

<?= \yii\widgets\LinkPager::widget([
    'pagination' => $pages,
]); ?>
<?php



