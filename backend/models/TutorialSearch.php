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
            [['Id', 'Id_Kategori', 'Id_User'], 'integer'],
            [['Judul_Tutorial', 'Status'], 'safe'],
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

        $query->andFilterWhere([
            'Id' => $this->Id,
            'Id_Kategori' => $this->Id_Kategori,
            'Id_User' => $this->Id_User,
        ]);

        $query->andFilterWhere(['like', 'Judul_Tutorial', $this->Judul_Tutorial])
            ->andFilterWhere(['like', 'Status', $this->Status]);

        $request = Yii::$app->request;
        $Id = $request->get('Id');

        $query->andFilterWhere([
            'Id_Kategori' => $Id,
        ]);     

        return $dataProvider;
    }
}
