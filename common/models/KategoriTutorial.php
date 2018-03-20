<?php

namespace common\models;

use Yii;
use common\models\Tutorial;
use common\models\SubTutorialText;
use common\models\SubTutorialTugas;
use common\models\SubTutorialVideo;
use yii\behaviors\SluggableBehavior;

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
            [['Id_User', 'Gambar'], 'integer'],
            [['Status', 'Deskripsi', 'Level'], 'string'],
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


    public function behaviors()
    {
        return [
            [
                'class' => 'mdm\upload\UploadBehavior',
                'attribute' => 'file', // required, use to receive input file
                'savedAttribute' => 'Gambar', // optional, use to link model with saved file.
                'uploadPath' => '@common/upload/Image_Kategori_Tutorial', // saved directory. default to '@runtime/upload'
                'autoSave' => true, // when true then uploaded file will be save before ActiveRecord::save()
                'autoDelete' => true, // when true then uploaded file will deleted before ActiveRecord::delete()
                'deleteOldFile' => true,
                'directoryLevel' => 0
            ],
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'Nm_Kategori',
            ],
        ];
    }


    public function afterDelete()
    {
        Tutorial::deleteAll([
                            'Id_Kategori' => $this->Id,
                            'Id_User' => $this->Id_User,
                          
                        ]);
        SubTutorialText::deleteAll([
                            'Id_Kategori' => $this->Id,
                            'Id_User' => $this->Id_User,
                          
                        ]);
        SubTutorialTugas::deleteAll([
                            'Id_Kategori' => $this->Id,
                            'Id_User' => $this->Id_User,
                          
                        ]);
        SubTutorialVideo::deleteAll([
                            'Id_Kategori' => $this->Id,
                            'Id_User' => $this->Id_User,
                          
                        ]);
        return true;
    }

    // public function behaviors()
    // {
    //     return [
    //         [
    //             'class' => SluggableBehavior::className(),
    //             'attribute' => 'Nm_Kategori',
    //         ],
    //     ];
    // }

}
