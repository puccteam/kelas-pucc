<?php

/*
 * Padlian Chairi
 * dipakai sebagai pengaturan variabel yang sifatnya global
 */


namespace common\componen;

use Yii;
use yii\base\Component;
use hscstudio\mimin\components\Mimin;
use yii\helpers\Url;


class Pengaturan extends Component {

	public function getTahun() {
		return 2018;
  	}

  	public function getMenu($menuItems){
  		$menuItems = Mimin::filterMenu($menuItems);
  		echo '<ul class="main-menu">';
  		foreach ($menuItems as $items) {
  			if (isset($items['items'])){
  				echo '<li class="has-sub-menu">';
  				echo '<a href="#">
				      <div class="icon-w">
				        <div class="os-icon os-icon-window-content"></div>
				      </div>
				      <span>'.$items['label'].'</span></a>';
				echo '<ul class="sub-menu">';
				foreach ($items['items'] as $items2) {
					echo '<li class="sub-menu">
					        <a href="'.Url::to($items2['url']).'">
					          '.$items2['label'].'</a>
					      </li>';
				}
				echo '</ul>';
  			}else{
  				echo '<li class="sub-menu">';
  				echo '<a href="'.Url::to($items['url']).'">
				      <div class="icon-w">
				        <div class="os-icon os-icon-window-content"></div>
				      </div>
				      <span>'.$items['label'].'</span></a>';
  			}
  			echo '</li>';
  		}
  	}

}