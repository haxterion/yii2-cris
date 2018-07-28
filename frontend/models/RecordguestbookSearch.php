<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Recordguestbook;

/**
 * RecordguestbookSearch represents the model behind the search form of `frontend\models\Recordguestbook`.
 */
class RecordguestbookSearch extends Recordguestbook
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'price', 'status', 'id_user', 'person_name'], 'integer'],
            [['id_guestbook', 'date_phone', 'date_today', 'date_input', 'date_transaksi', 'explanation'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Recordguestbook::find();

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
            'id' => $this->id,
            'date_phone' => $this->date_phone,
            'date_today' => $this->date_today,
            'date_input' => $this->date_input,
            'date_transaksi' => $this->date_transaksi,
            'price' => $this->price,
            'status' => $this->status,
            'id_user' => $this->id_user,
            'person_name' => $this->person_name,
        ]);

        $query->andFilterWhere(['like', 'id_guestbook', $this->id_guestbook])
            ->andFilterWhere(['like', 'explanation', $this->explanation]);

        return $dataProvider;
    }
}
