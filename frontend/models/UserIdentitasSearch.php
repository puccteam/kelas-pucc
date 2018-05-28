<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\UserIdentitas;

/**
 * UserIdentitasSearch represents the model behind the search form of `common\models\UserIdentitas`.
 */
class UserIdentitasSearch extends UserIdentitas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username'], 'integer'],
            [['nama_lengkap', 'provinsi', 'kota_asal', 'email', 'no_telp', 'profile', 'facebook_link', 'twitter_link', 'instagram_link'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = UserIdentitas::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'username' => $this->username,
        ]);

        $query->andFilterWhere(['like', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['like', 'provinsi', $this->provinsi])
            ->andFilterWhere(['like', 'kota_asal', $this->kota_asal])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'profile', $this->profile])
            ->andFilterWhere(['like', 'facebook_link', $this->facebook_link])
            ->andFilterWhere(['like', 'twitter_link', $this->twitter_link])
            ->andFilterWhere(['like', 'instagram_link', $this->instagram_link]);

        return $dataProvider;
    }
}
