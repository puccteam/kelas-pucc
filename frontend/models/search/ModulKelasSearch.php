<?php

namespace frontend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\KategoriTutorial;

/**
 * ModulKelasSearch represents the model behind the search form about `frontend\models\KategoriTutorial`.
 */
class ModulKelasSearch extends KategoriTutorial
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'Id_User', 'Gambar'], 'integer'],
            [['Nm_Kategori', 'Status', 'Deskripsi', 'Level', 'slug'], 'safe'],
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
        $query = KategoriTutorial::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Id' => $this->Id,
            'Id_User' => $this->Id_User,
            'Gambar' => $this->Gambar,
        ]);

        $query->andFilterWhere(['like', 'Nm_Kategori', $this->Nm_Kategori])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Deskripsi', $this->Deskripsi])
            ->andFilterWhere(['like', 'Level', $this->Level])
            ->andFilterWhere(['like', 'slug', $this->slug]);

        return $dataProvider;
    }
}
