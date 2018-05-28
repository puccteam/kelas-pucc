<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\User;
use common\models\UserIdentitas;
use common\models\TaBelajar;
use common\models\TaTutorial;

class ProfileController extends Controller
{

    public function actionIndex($u){
      $this->layout = 'main-kelas';

      $user = User::find()->where(['username' => $u])->one();
      $userIdentitas = UserIdentitas::find()->where(['username' => $u])->one();
      $taBelajar = TaBelajar::find()->where(['username' => $u])->all();
      $taTutorial = TaTutorial::find()->where(['username' => $u])->all();

     return $this->render('index', [
      'user' => $user,
      'taBelajar' => $taBelajar,
      'taTutorial' => $taTutorial,
      'userIdentitas' => $userIdentitas]);
    }

}
