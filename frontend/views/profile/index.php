<?php


  $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $user->email) ) ) . "?d=wavatar&s=200";



?>

<div class="profile">
  <div class="jumbotron" id="home" style="height:585px; background-image: linear-gradient(to right top, #212032, #363e55, #4a6079, #5e839c, #74a9bf);">
     <div class="container">
       <div class="img-profile">
          <img src="<?php echo $grav_url; ?>" alt="" />
       </div>


     </div>
   </div>
</div>

 <!-- Akhir Jumbotron -->
