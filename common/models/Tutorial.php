<?php

namespace common\models;

use Yii;
use common\models\SubTutorialText;
use common\models\SubTutorialTugas;
use common\models\SubTutorialVideo;

/**
 * This is the model class for table "Tutorial".
 *
 * @property int $Id
 * @property int $Id_Kategori
 * @property int $Id_User
 * @property string $Judul_Tutorial
 * @property string $Status
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
            [['Id', 'Id_Kategori', 'Id_User', 'Judul_Tutorial', 'Status'], 'required'],
            [['Id', 'Id_Kategori', 'Id_User'], 'integer'],
            [['Status'], 'string'],
            [['Judul_Tutorial'], 'string', 'max' => 255],
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
            'Judul_Tutorial' => 'Judul  Tutorial',
            'Status' => 'Status',
        ];
    }

    public function getKategoriTutorial()
    {
        return $this->hasOne(\common\models\KategoriTutorial::className(), ['Id' => 'Id_Kategori']);
    }

    public function getTaBelajar()
    {
        $username = Yii::$app->user->identity->username;
        return $this->hasOne(\common\models\TaBelajar::className(), ['id_tutorial' => 'Id_Kategori', 'id_materi' => 'Id'])->andWhere(['username' => $username, ])->exists();
    }


    public function setId(){

      $data = Tutorial::find()->where([
                                         "Id_Kategori" => $this->Id_Kategori,
                                          // "Id_User" => $this->Id_User,

                                      ])->orderBy(['Id'=> SORT_DESC])->one();

      if ($data) {
        $no = $data->Id + 1;
        $this->Id = $no;
        return true;
      }else {
        $this->Id = 1;
        return true;
      }
    }


    public function afterDelete()
    {
        SubTutorialText::deleteAll([
                            'Id' => $this->Id,
                            'Id_Kategori' => $this->Id_Kategori,
                            'Id_User' => $this->Id_User,

                        ]);
        SubTutorialTugas::deleteAll([
                            'Id' => $this->Id,
                            'Id_Kategori' => $this->Id_Kategori,
                            'Id_User' => $this->Id_User,

                        ]);
        SubTutorialVideo::deleteAll([
                            'Id' => $this->Id,
                            'Id_Kategori' => $this->Id_Kategori,
                            'Id_User' => $this->Id_User,

                        ]);
        return true;
    }

}
