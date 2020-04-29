<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\models\Categories;
use yii\models\Brands;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category')->dropDownList(
            ArrayHelper::map(\app\models\Categories::find()->all(),'id','name'),
            ['prompt'=>'Select Category']
    ) ?>

    <?= $form->field($model, 'brand_name')->dropDownList(
        ArrayHelper::map(\app\models\Brands::find()->all(),'id','name'),
        ['prompt'=>'Select Brand']
    ) ?>

    <?= $form->field($model, 'model_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'model_part_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
