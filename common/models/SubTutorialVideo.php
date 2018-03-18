<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Sub_Tutorial_Video".
 *
 * @property int $Id
 * @property int $Id_Kategori
 * @property int $Id_User
 * @property string $Url_Video
 * @property string $Status
 */
class SubTutorialVideo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Sub_Tutorial_Video';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'Id_Kategori', 'Id_User', 'Url_Video', 'Status'], 'required'],
            [['Id', 'Id_Kategori', 'Id_User'], 'integer'],
            [['Status'], 'string'],
            [['Url_Video'], 'string', 'max' => 350],
            [['Id', 'Id_Kategori', 'Id_User'], 'unique', 'targetAttribute' => ['Id', 'Id_Kategori', 'Id_User']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Id_Kategori' => 'Id  Kategori',
            'Id_User' => 'Id  User',
            'Url_Video' => 'Url  Video',
            'Status' => 'Status',
        ];
    }

    public function getJudulTutorial()
    {
        return $this->hasOne(\common\models\Tutorial::className(), ['Id' => 'Id', 'Id_Kategori' => 'Id_Kategori', 'Id_User' => 'Id_User']);
    }


    public function getAksesTambah()
    {


      $request = Yii::$app->request;
      $Id = $request->get('Id');
      $Id_Kategori = $request->get('Id_Kategori');

      $modelTutorial = SubTutorialVideo::find()->where([
          'Id' => $Id,
          'Id_Kategori' => $Id_Kategori,
        ])->count();

        if($modelTutorial == 0){
          return true;
        }else {
          return false;
        }

    }
}
