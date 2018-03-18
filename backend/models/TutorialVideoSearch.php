<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SubTutorialVideo;

/**
 * TutorialVideoSearch represents the model behind the search form about `common\models\SubTutorialVideo`.
 */
class TutorialVideoSearch extends SubTutorialVideo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'Id_Kategori', 'Id_User'], 'integer'],
            [['Url_Video', 'Status'], 'safe'],
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
        $query = SubTutorialVideo::find();

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

        $query->andFilterWhere(['like', 'Url_Video', $this->Url_Video])
            ->andFilterWhere(['like', 'Status', $this->Status]);
        
        $request = Yii::$app->request;
        $Id = $request->get('Id');
        $Id_Kategori = $request->get('Id_Kategori');

        $query->andFilterWhere([
            'Id_Kategori' => $Id_Kategori,
            'Id' => $Id,
        ]); 
        return $dataProvider;
    }
}
