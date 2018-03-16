<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Tutorial;

/**
 * TutorialSearch represents the model behind the search form about `common\models\Tutorial`.
 */
class TutorialSearch extends Tutorial
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'Id_User', 'Id_Kategori', 'Nm_Artikel', 'Isi_Artikel', 'Status', 'Img_Artikel'], 'safe'],
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
        $query = Tutorial::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'Id', $this->Id])
            ->andFilterWhere(['like', 'Id_User', $this->Id_User])
            ->andFilterWhere(['like', 'Id_Kategori', $this->Id_Kategori])
            ->andFilterWhere(['like', 'Nm_Artikel', $this->Nm_Artikel])
            ->andFilterWhere(['like', 'Isi_Artikel', $this->Isi_Artikel])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Img_Artikel', $this->Img_Artikel]);

        return $dataProvider;
    }
}
