<?php 
namespace app\controllers;

use app\models\Price;
use Yii;
use yii\base\Controller;

class PriceController extends Controller{
    public function actionIndex(){
        $priceClass = new Price();
        if (Yii::$app->request->isPost && $priceClass->validate()) {
            $name = Yii::$app->request->post('name');
            $price = Yii::$app->request->post('price');
            $descr = Yii::$app->request->post('description'); 

            $priceClass->setName($name);
            $priceClass->setPrice($price);
            $priceClass->setDescr($descr);

            $priceClass->addNewPrice();
        }
        return $this->render('index', ['priceList' => $priceClass->getPriceList()]);
    }
}
?>