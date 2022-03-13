<?php

use yii\helpers\Html;

use yeesoft\multilingual\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model common\models\ShopCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shop-category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->languageSwitcher($model); ?>


    <?= $form->field($model, 'category_name')->textInput() ?>

    <?= $form->field($model, 'status')->dropdownlist(['1'=>'Aktiv','0'=>'Aktiv emas']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>