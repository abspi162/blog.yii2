<?php
use yii\helpers\Html;
?>
<nav class="nav navbar-nav text-uppercase">
    <li> <a id="curentlll"><?= $current->name;?></a></li>
       <?php foreach ($langs as $lang):?>
    <li> <?= Html::a($lang->name, '/'.$lang->url.Yii::$app->getRequest()->getLangUrl()) ?></li>
        <?php endforeach;?>
</nav>
