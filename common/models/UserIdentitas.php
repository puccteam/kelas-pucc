<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "User_Identitas".
 *
 * @property int $username
 * @property string $nama_lengkap
 * @property string $provinsi
 * @property string $kota_asal
 * @property string $email
 * @property string $no_telp
 * @property string $profile
 * @property string $facebook_link
 * @property string $twitter_link
 * @property string $instagram_link
 */
class UserIdentitas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'User_Identitas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username'], 'required'],
            // [['username'], 'integer'],
            [['nama_lengkap', 'kota_asal', 'email', 'profile', 'facebook_link', 'twitter_link', 'instagram_link'], 'string', 'max' => 150],
            [['provinsi'], 'string', 'max' => 150],
            [['no_telp'], 'string', 'max' => 50],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'nama_lengkap' => 'Nama Lengkap',
            'provinsi' => 'Provinsi',
            'kota_asal' => 'Kota Asal',
            'email' => 'Email',
            'no_telp' => 'No Telp',
            'profile' => 'Profile',
            'facebook_link' => 'Facebook Link',
            'twitter_link' => 'Twitter Link',
            'instagram_link' => 'Instagram Link',
        ];
    }
}
