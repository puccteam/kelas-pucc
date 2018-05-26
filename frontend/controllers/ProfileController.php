<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\User;

class ProfileController extends Controller
{

    public function actionIndex($u){
      $this->layout = 'main-kelas';

      $user = User::find()->where(['username' => $u])->one();

     return $this->render('index', ['user' => $user]);
    }

}
