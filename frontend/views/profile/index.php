<?php


  $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $user->email) ) ) . "?d=wavatar&s=200";



?>

<div class="profile">
  <div class="jumbotron-header">
    <!-- <div class="jumbotron-sub-header" id="home" style="height:185px;"> -->
    <div class="jumbotron" id="home" style="height:585px; background-image: linear-gradient(to right top, #212032cc, #363e55d6, #4a6079d9, #5e839ccc, #74a9bfb8);">
     <div class="container">
       <div class="img-profile">
          <img src="<?php echo $grav_url; ?>" alt="" />
        </div>


       <div class="deskripsi" style="color:white">
         <h2>
           <?= $userIdentitas->nama_lengkap ?> (<?= $userIdentitas->username ?>)
         </h2>
         <h5><?= $userIdentitas->kota_asal ?>, <?= $userIdentitas->provinsi ?> </h5>
         <h4>"<?= $userIdentitas->profile ?>"</h4>
       </div>


     </div>
   </div>
 </div>
</div>


  <div class="container">
     <div class="daftar-kelas-user">
       <h3>Kelas Yang Dikuti</h3>
       <?php foreach ($taTutorial as $data): ?>

        <a href="#">

            <div class="row justify-content-md-center">
              <div class="col col-md-6" style="border-bottom:2px solid">
                <h4><?= $data->tutorial->Nm_Kategori?></h4>
              </div>

            </div>


        </a>

       <?php endforeach; ?>
     </div>
  </div>
  <br><br>

</div>

 <!-- Akhir Jumbotron -->
