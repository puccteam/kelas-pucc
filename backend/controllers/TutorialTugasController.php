<?php

namespace backend\controllers;

use Yii;
use common\models\SubTutorialTugas;
use backend\models\TutorialTugasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \yii\web\Response;
use yii\helpers\Html;

/**
 * TutorialTugasController implements the CRUD actions for SubTutorialTugas model.
 */
class TutorialTugasController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                    'bulk-delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all SubTutorialTugas models.
     * @return mixed
     */
    public function actionIndex($Id, $Id_Kategori)
    {    
        $searchModel = new TutorialTugasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $model = new SubTutorialTugas;

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $model,
            'Id' => $Id,
            'Id_Kategori' => $Id_Kategori
        ]);
    }


    /**
     * Displays a single SubTutorialTugas model.
     * @param integer $Id
     * @param integer $Id_Kategori
     * @param integer $Id_User
     * @return mixed
     */
    public function actionView($Id, $Id_Kategori, $Id_User)
    {   
        $request = Yii::$app->request;
        if($request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            return [
                    'title'=> "SubTutorialTugas #".$Id, $Id_Kategori, $Id_User,
                    'content'=>$this->renderAjax('view', [
                        'model' => $this->findModel($Id, $Id_Kategori, $Id_User),
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                            Html::a('Edit',['update','Id, $Id_Kategori, $Id_User'=>$Id, $Id_Kategori, $Id_User],['class'=>'btn btn-primary','role'=>'modal-remote'])
                ];    
        }else{
            return $this->render('view', [
                'model' => $this->findModel($Id, $Id_Kategori, $Id_User),
            ]);
        }
    }

    /**
     * Creates a new SubTutorialTugas model.
     * For ajax request will return json object
     * and for non-ajax request if creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($Id, $Id_Kategori)
    {
        $request = Yii::$app->request;
        $model = new SubTutorialTugas();  
        
        $id_user = Yii::$app->user->getId();

        $model->Id_User = $id_user;
        $model->Id = $Id;     
        $model->Id_Kategori = $Id_Kategori;  

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            if($request->isGet){
                return [
                    'title'=> "Create new SubTutorialTugas",
                    'content'=>$this->renderAjax('create', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
        
                ];         
            }else if($model->load($request->post()) && $model->save()){
                return [
                    'forceReload'=>'#crud-datatable-pjax',
                    'title'=> "Create new SubTutorialTugas",
                    'content'=>'<span class="text-success">Create SubTutorialTugas success</span>',
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                            Html::a('Create More',['create'],['class'=>'btn btn-primary','role'=>'modal-remote'])
        
                ];         
            }else{           
                return [
                    'title'=> "Create new SubTutorialTugas",
                    'content'=>$this->renderAjax('create', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
        
                ];         
            }
        }else{
            /*
            *   Process for non-ajax request
            */
            if ($model->load($request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id' => $model->Id, 'Id_Kategori' => $model->Id_Kategori, 'Id_User' => $model->Id_User]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }
       
    }

    /**
     * Updates an existing SubTutorialTugas model.
     * For ajax request will return json object
     * and for non-ajax request if update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Id
     * @param integer $Id_Kategori
     * @param integer $Id_User
     * @return mixed
     */
    public function actionUpdate($Id, $Id_Kategori, $Id_User)
    {
        $request = Yii::$app->request;
        $model = $this->findModel($Id, $Id_Kategori, $Id_User);       

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            if($request->isGet){
                return [
                    'title'=> "Update SubTutorialTugas #".$Id, $Id_Kategori, $Id_User,
                    'content'=>$this->renderAjax('update', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
                ];         
            }else if($model->load($request->post()) && $model->save()){
                return [
                    'forceReload'=>'#crud-datatable-pjax',
                    'title'=> "SubTutorialTugas #".$Id, $Id_Kategori, $Id_User,
                    'content'=>$this->renderAjax('view', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                            Html::a('Edit',['update','Id, $Id_Kategori, $Id_User'=>$Id, $Id_Kategori, $Id_User],['class'=>'btn btn-primary','role'=>'modal-remote'])
                ];    
            }else{
                 return [
                    'title'=> "Update SubTutorialTugas #".$Id, $Id_Kategori, $Id_User,
                    'content'=>$this->renderAjax('update', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
                ];        
            }
        }else{
            /*
            *   Process for non-ajax request
            */
            if ($model->load($request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id' => $model->Id, 'Id_Kategori' => $model->Id_Kategori, 'Id_User' => $model->Id_User]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }
    }

    /**
     * Delete an existing SubTutorialTugas model.
     * For ajax request will return json object
     * and for non-ajax request if deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Id
     * @param integer $Id_Kategori
     * @param integer $Id_User
     * @return mixed
     */
    public function actionDelete($Id, $Id_Kategori, $Id_User)
    {
        $request = Yii::$app->request;
        $this->findModel($Id, $Id_Kategori, $Id_User)->delete();

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['forceClose'=>true,'forceReload'=>'#crud-datatable-pjax'];
        }else{
            /*
            *   Process for non-ajax request
            */
            return $this->redirect(['index']);
        }


    }

     /**
     * Delete multiple existing SubTutorialTugas model.
     * For ajax request will return json object
     * and for non-ajax request if deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Id
     * @param integer $Id_Kategori
     * @param integer $Id_User
     * @return mixed
     */
    public function actionBulkDelete()
    {        
        $request = Yii::$app->request;
        $pks = explode(',', $request->post( 'pks' )); // Array or selected records primary keys
        foreach ( $pks as $pk ) {
            $model = $this->findModel($pk);
            $model->delete();
        }

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['forceClose'=>true,'forceReload'=>'#crud-datatable-pjax'];
        }else{
            /*
            *   Process for non-ajax request
            */
            return $this->redirect(['index']);
        }
       
    }

    /**
     * Finds the SubTutorialTugas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Id
     * @param integer $Id_Kategori
     * @param integer $Id_User
     * @return SubTutorialTugas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id, $Id_Kategori, $Id_User)
    {
        if (($model = SubTutorialTugas::findOne(['Id' => $Id, 'Id_Kategori' => $Id_Kategori, 'Id_User' => $Id_User])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
