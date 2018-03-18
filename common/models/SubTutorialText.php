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
class SubTutorialText extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Sub_Tutorial_Text';
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
            [['Nm_Artikel'], 'string', 'max' => 255],
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
                'savedAttribute' => 'Img_Artikel', // optional, use to link model with saved file.
                'uploadPath' => '@common/upload/Img_Artikel', // saved directory. default to '@runtime/upload'
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

      $modelTutorial = SubTutorialText::find()->where([
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
