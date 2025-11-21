<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>

<?php if (Yii::$app->session->hasFlash('feedbackFormSubmitted')): ?>
    Спасибо, <?=$model->name?>! Ваше сообщение отправлено: <?= $model->message ?>
<?php else: ?>

    <?php $form = ActiveForm::begin(['action' => ['feedback/index'], 'method' => 'post']);?>
        <?=$form->field($model, 'name')?>
        <?=$form->field($model, 'email')?>
        <?=$form->field($model, 'message')?>
        <?=Html::submitButton('Send')?>
    <?php ActiveForm::end();?>

<?php endif; ?>