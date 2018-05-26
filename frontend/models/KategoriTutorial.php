<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Kategori_Tutorial".
 *
 * @property int $Id
 * @property int $Id_User
 * @property string $Nm_Kategori
 * @property string $Status
 * @property int $Gambar
 * @property string $Deskripsi
 * @property string $Level
 * @property string $slug
 */
class KategoriTutorial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Kategori_Tutorial';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_User', 'Nm_Kategori', 'Status'], 'required'],
            [['Id_User', 'Gambar'], 'integer'],
            [['Status', 'Deskripsi'], 'string'],
            [['Nm_Kategori'], 'string', 'max' => 150],
            [['Level'], 'string', 'max' => 50],
            [['slug'], 'string', 'max' => 255],
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
            'Nm_Kategori' => 'Nm  Kategori',
            'Status' => 'Status',
            'Gambar' => 'Gambar',
            'Deskripsi' => 'Deskripsi',
            'Level' => 'Level',
            'slug' => 'Slug',
        ];
    }
}
