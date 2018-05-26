<?php

namespace frontend\controllers;

use Yii;
use frontend\models\KategoriTutorial;
use frontend\models\search\ModulKelasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \yii\web\Response;
use yii\helpers\Html;

/**
 * ModulKelasController implements the CRUD actions for KategoriTutorial model.
 */
class ProfilController extends Controller
{

  public function index()
  {
    $this->layout = 'main-kelas';

     return $this->render('index', [
         'searchModel' => $searchModel,
         'dataProvider' => $dataProvider,
         'model' => $model,
     ]);
  }

}
