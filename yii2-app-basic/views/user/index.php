<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this -> title = 'Список пользователей';
?>

<h1><?= Html::encode($this->title)?></h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Имя</th>
        <th>Возраст</th>
        <th>Действия</th> 
    </tr>

    <?php foreach($data as $user): ?>
        <tr>
            <td><?=Html::encode($user->id)?></td>
            <td><?=Html::encode($user->name)?></td>
            <td><?=Html::encode($user->age)?></td>
            <td>
                <?php $form = ActiveForm::begin(['action' => ['user/index'], 'method' => 'post']);?>
                    <?= Html::hiddenInput('id', $user -> id) ?>
                    <?= Html::input('number', 'age', $user->age, ['placeholder' => 'Новый возраст']) ?>
                    <?= Html::submitButton('Update') ?>
                <?php ActiveForm::end(); ?>
            </td>
    
        </tr>
    <?php endforeach; ?>
</table>