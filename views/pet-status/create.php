<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PetStatus */

$this->title = Yii::t('app', 'Create Pet Status');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pet Statuses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pet-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
