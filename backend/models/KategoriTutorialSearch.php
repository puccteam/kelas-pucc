<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\KategoriTutorial;

/**
 * KategoriTutorialSearch represents the model behind the search form about `common\models\KategoriTutorial`.
 */
class KategoriTutorialSearch extends KategoriTutorial
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'Id_User'], 'integer'],
            [['Nm_Kategori', 'Status'], 'safe'],
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
        ]);

        $query->andFilterWhere(['like', 'Nm_Kategori', $this->Nm_Kategori])
            ->andFilterWhere(['like', 'Status', $this->Status]);

        return $dataProvider;
    }
}
