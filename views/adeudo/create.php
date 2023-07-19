<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Adeudo $model */

$this->title = Yii::t('app', 'Create Adeudo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Adeudos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adeudo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
