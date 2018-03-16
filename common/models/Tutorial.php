<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Tutorial".
 *
 * @property int $Id
 * @property int $Id_User
 * @property int $Id_Kategori
 * @property string $Nm_Artikel
 * @property string $Isi_Artikel
 * @property string $Status
 * @property string $Img_Artikel
 */
class Tutorial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Tutorial';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'Id_User', 'Id_Kategori'], 'required'],
            [['Isi_Artikel', 'Status'], 'string'],
            [['Id', 'Id_User', 'Id_Kategori'], 'string', 'max' => 4],
            [['Nm_Artikel', 'Img_Artikel'], 'string', 'max' => 255],
            [['Id', 'Id_User', 'Id_Kategori'], 'unique', 'targetAttribute' => ['Id', 'Id_User', 'Id_Kategori']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Id_User' => 'Id  User',
            'Id_Kategori' => 'Id  Kategori',
            'Nm_Artikel' => 'Nm  Artikel',
            'Isi_Artikel' => 'Isi  Artikel',
            'Status' => 'Status',
            'Img_Artikel' => 'Img  Artikel',
        ];
    }
}
