<?php
namespace app\controllers;
use yii\web\Controller;
use Yii;
use app\models\User;

class UserController extends Controller {
    public function actionIndex()
    {
        $data = User::getData();

        if (Yii::$app->request->isPost) {
            $id = Yii::$app->request->post('id');
            $newAge = Yii::$app->request->post('age');
            $data = User::updateAge($id, $newAge);
        }

        return $this->render('index', ['data' => $data]);
    }

}