<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Prices';
?>



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


