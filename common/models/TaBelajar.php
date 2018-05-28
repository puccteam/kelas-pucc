<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Ta_Belajar".
 *
 * @property string $username
 * @property int $id_tutorial
 * @property int $id_materi
 */
class TaBelajar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Ta_Belajar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'id_tutorial', 'id_materi'], 'required'],
            [['id_tutorial', 'id_materi'], 'integer'],
            [['username'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'id_tutorial' => 'Id Tutorial',
            'id_materi' => 'Id Materi',
        ];
    }
}
