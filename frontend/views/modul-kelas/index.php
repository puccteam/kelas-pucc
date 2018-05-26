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
        <h2 class="text-center" style="color: white; margin-top: 55px;">Daftar Semua Kelas</h2>        
      </div>
    </div>
    <!-- Akhir Jumbotron -->
    <div class="container">
        <?php foreach ($model as $data) { ?>
        
            <div class="col-md-4">
                
                    <div class="list-kelas">
                        <?php if ($data->Gambar): ?> 
                            <div class="form-group">
                                <?= Html::img(['/file', 'id' => $data->Gambar],['class' => 'img-responsive img-full']) ?>
                            </div>
                        <?php endif; ?>   
                        <h2><?= $data->Nm_Kategori ?></h2> 
                        <p><?=  \yii\helpers\StringHelper::truncateWords($data->Deskripsi, 35, '...') ?></p> 
                        <br>
                        <p><span class="fa fa-star"></span>  <?= $data->Level ?></p>

                        <a href="<?php echo Url::to(['modul-kelas/kelas', 'id' => $data->Id ]); ?>">Buka Kelas</a>
                 

                            <div class="clearfix"></div>
                    
                   
                    </div>
                    
            </div>
            

        
        <?php } ?>
    </div>