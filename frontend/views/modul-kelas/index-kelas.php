<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset;
use johnitvn\ajaxcrud\BulkButtonWidget;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\ModulKelasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategori Tutorials';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
  <div class="jumbotron-header">
    <!-- <div class="jumbotron-sub-header" id="home" style="height:185px;"> -->
    <div class="jumbotron" id="home" style="height:185px; background-image: linear-gradient(to right top, #212032cc, #363e55d6, #4a6079d9, #5e839ccc, #74a9bfb8);">
       <div class="container">
         <h2 class="text-center" style="color: white; margin-top: 55px;"><?= 'Daftar Materi Di Kelas '. $modelKategori->Nm_Kategori ?></h2>
       </div>
     </div>
     <!-- Akhir Jumbotron -->
  </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
              <?php if (Yii::$app->session->hasFlash('warning')): ?>
                <div class="alert alert-warning alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <?= Yii::$app->session->getFlash('warning') ?>
                </div>
              <?php endif; ?>

                <?php foreach ($model as $data) { ?>


                        <a href="<?php echo Url::to(['modul-kelas/kelas', 'id' => $data->Id_Kategori,  'tutorial' => $data->Id]); ?>">

                            <div class="list-materi-kelas">

                              <?php if($data->taBelajar){
                                echo '<h4 style="color:#4a9ade"><del>'.$data->Judul_Tutorial.'</del><h4>';
                              }else {
                                echo '<h4>' .$data->Judul_Tutorial.'</h4>';
                              } ?>

                            </div>

                        </a>

                <?php } ?>
            </div>

            <div class="col-md-4" style="text-align: center;">
                <div class="img-materi">
                    <?= Html::img(['/file', 'id' => $modelKategori->Gambar],['class' => 'img-responsive img-full']) ?>
                </div>

                <h3><?= $modelKategori->Nm_Kategori ?></h3>
                <a href="<?= Url::to(['modul-kelas/daftar-kelas', 'u' => Yii::$app->user->identity->username, 'kelas' => $modelKategori->Id]);?>" class="btn btn-primary"> Daftar Kelas</a>
                <p style="text-align: justify;" style="font-size:21px"><?= $modelKategori->Deskripsi ?></p>
                <p><span class="fa fa-star"></span>  <?= $modelKategori->Level ?></p>

            </div>
        </div>

    </div>
