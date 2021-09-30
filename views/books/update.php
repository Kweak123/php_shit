<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>books/update #ID: <?= $model->id; ?></h1>

<?php $form = ActiveForm::begin(); ?>

<?php echo $form->field($model, 'bookName'); ?>

<?php echo $form->field($model, 'author'); ?>

<?php echo $form->field($model, 'publicationDate'); ?>

<?php echo Html::submitButton('Save', [
    'class' => 'btn btn-primary',
]); ?>

<?php ActiveForm::end();