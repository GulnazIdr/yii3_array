<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Prices';
?>

<div class="price-index">
    <?php $form = ActiveForm::begin(['action' => ['price/index'], 'method' => 'post']);?>
        <?= Html::input('text', 'name', "", ['placeholder' => 'Название']) ?>
        <?= Html::input('text', 'price', "", ['placeholder' => 'Цена в месяц']) ?>
        <?= Html::input('text', 'description', "", ['placeholder' => 'Описание']) ?>
        <?= Html::submitButton('Добавить') ?>
    <?php ActiveForm::end(); ?>

    <table>
        <thead>
            <tr>
            <th scope="col">Название</th>
            <th scope="col">Цена в месяц</th>
            <th scope="col">Описание</th>
            </tr>
        </thead>

        <tbody>
           <tbody>
            <?php foreach($priceList as $price): ?>
                <tr>
                    <th scope="row"><?= $price->name ?></th>
                    <td><?= $price->price ?></td>
                    <td><?= $price->description ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>      

    </table>
</div>

