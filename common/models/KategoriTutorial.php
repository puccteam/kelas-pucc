<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Kategori_Tutorial".
 *
 * @property int $Id
 * @property int $Id_User
 * @property string $Nm_Kategori
 * @property string $Status
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
            [['Id_User'], 'integer'],
            [['Status'], 'string'],
            [['Nm_Kategori'], 'string', 'max' => 150],
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
        ];
    }
}
