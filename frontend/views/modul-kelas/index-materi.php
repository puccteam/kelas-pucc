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

   <div class="jumbotron" id="home" style="height:185px; background-image: linear-gradient(to right top, #212032, #363e55, #4a6079, #5e839c, #74a9bf);">
      <div class="container">
        <h2 class="text-center" style="color: white; margin-top: 55px;"><?= 'Daftar Materi Di Kelas '. $modelKategori->Nm_Kategori ?></h2>
      </div>
    </div>
    <!-- Akhir Jumbotron -->
    <div class="container">

        <div class="row">
            <div class="col-md-8">
                 <iframe width="100%" height="400px" src="<?= isset($modelMateri->Url_Video) ? $modelMateri->Url_Video : '' ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>

            <div class="col-md-4" style="text-align: center;">

                <div class="list-materi-right">
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

            </div>
        </div>

    </div>
