<?php
namespace app\controllers;
use app\models\Feedback;
use yii\web\Controller;
use Yii;

class FeedbackController extends Controller{

    public function actionIndex(){
        $form = new Feedback(); 

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            Yii::$app->session->setFlash('feedbackFormSubmitted');
           return $this->render('index', ['model' => $form ]);
        } else {
            return $this->render('index', ['model' => $form]);
        }
    }

}
?>