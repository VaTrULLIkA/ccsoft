<?php

namespace app\controllers;

use app\models\Message;
use yii\web\Controller;

class MainController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [];
    }

    public function actionGetJson($data)
    {
        $dataForModel = ['Message' => json_decode($data, true)];

        $message = new Message();

        if ($message->load($dataForModel) && $message->validate()) {
            $message->save();
        }
    }

    public function actionShow()
    {
        $messages = Message::find()->all();

        return $this->render('index', [
            'messages' => $messages
        ]);
    }
}
