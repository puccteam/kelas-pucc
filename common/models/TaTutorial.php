<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Ta_Tutorial".
 *
 * @property string $username
 * @property int $id_tutorial
 */
class TaTutorial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Ta_Tutorial';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'id_tutorial'], 'required'],
            [['id_tutorial'], 'integer'],
            [['username'], 'string', 'max' => 150],
            // [['username'], 'unique'],
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
        ];
    }

    public function getTutorial()
    {
        return $this->hasOne(\common\models\KategoriTutorial::className(), ['Id' => 'id_tutorial']);
    }
}
