<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Sub_Tutorial_Tugas".
 *
 * @property int $Id
 * @property int $Id_Kategori
 * @property int $Id_User
 * @property string $Soal
 * @property int $Copy_Soal
 * @property string $Status
 */
class SubTutorialTugas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName()
    {
        return 'Sub_Tutorial_Tugas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'Id_Kategori', 'Id_User', 'Soal', 'Status'], 'required'],
            [['Id', 'Id_Kategori', 'Id_User', 'Copy_Soal'], 'integer'],
            [['Soal', 'Status'], 'string'],
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
            'Soal' => 'Soal',
            'Copy_Soal' => 'Copy  Soal',
            'Status' => 'Status',
        ];
    }


    public function getJudulTutorial()
    {
        return $this->hasOne(\common\models\Tutorial::className(), ['Id' => 'Id', 'Id_Kategori' => 'Id_Kategori', 'Id_User' => 'Id_User']);
    }

    public function behaviors()
    {
        return [
            [
                'class' => 'mdm\upload\UploadBehavior',
                'attribute' => 'file', // required, use to receive input file
                'savedAttribute' => 'Copy_Soal', // optional, use to link model with saved file.
                'uploadPath' => '@common/upload/Copy_Soal', // saved directory. default to '@runtime/upload'
                'autoSave' => true, // when true then uploaded file will be save before ActiveRecord::save()
                'autoDelete' => true, // when true then uploaded file will deleted before ActiveRecord::delete()
                'deleteOldFile' => true,
                'directoryLevel' => 0
            ],
        ];
    }

     public function getAksesTambah()
    {


      $request = Yii::$app->request;
      $Id = $request->get('Id');
      $Id_Kategori = $request->get('Id_Kategori');

      $modelTutorial = SubTutorialTugas::find()->where([
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
