<?php
/*
* Created by Zulfikri
* On March 11, 2018
* Untuk mengendalikan request url yang diketik
*/
namespace common\componen;

use Yii;
use yii\base\Component;


class Menu extends Component {
    
    public function getSotk(){
        $menuItems = [
            ['label' => 'Dashboard', 'url' => ['/site/']],
            [   'label' => 'Tutorial', 
                'items' => [
                    ['label' => 'Kategori', 'url' => ['/kategori-tutorial/']],
                    ['label' => 'Tutorial', 'url' => ['/tutorial/']],
                 ],
            ],
            [   'label' => 'Tupoksi', 
                'items' => [
                    ['label' => 'Kamus Tupoksi', 'url' => ['/tupoksi/']],
                    ['label' => 'Tupoksi Unit', 'url' => ['/tupoksi-unit/']],
                    ['label' => 'Tupoksi Sub Unit', 'url' => ['/tupoksi-sub-unit/']],
                    ['label' => 'Tupoksi Sub Sub Unit', 'url' => ['/tupoksi-sub-sub-unit/']],
                 ],
            ],
            [   'label' => 'Peraturan', 
                'items' => [
                    ['label' => 'Peraturan', 'url' => ['/peraturan/']],
                    ['label' => 'Transaksi Peraturan', 'url' => ['/transaksi-peraturan/']],
                    ['label' => 'Posting SOTK', 'url' => ['/posting-sotk/']],
                 ],
            ],
            ['label' => 'View Bagan', 'url' => ['/view-bagan/']],
            ['label' => 'Pengaturan', 
                'items' => [
                    ['label' => 'Kamus Tupoksi', 'url' => ['/tahapan/']],
                ]
            ]
        ];
        return $menuItems;
    }
} 