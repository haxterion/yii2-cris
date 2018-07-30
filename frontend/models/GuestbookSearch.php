<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Guestbook;

/**
 * GuestbookSearch represents the model behind the search form of `frontend\models\Guestbook`.
 */
class GuestbookSearch extends Guestbook
{

    public $createTimeRange;
    public $createTimeStart;
    public $createTimeEnd;

    public function behaviors()
    {
        return [
            [
                'class' => DateRangeBehavior::className(),
                'attribute' => 'createTimeRange',
                'dateStartAttribute' => 'createTimeStart',
                'dateEndAttribute' => 'createTimeEnd',
            ]
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['createTimeRange'], 'match', 'pattern' => '/^.+\s\-\s.+$/'],
            [['id', 'customer', 'address', 'date_input', 'date_transaksi', 'id_user', 'person_name'], 'safe'],
            [['phone_number'], 'number'],
            [['status'], 'integer'],
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
        $query = Guestbook::find();

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
            'phone_number' => $this->phone_number,
            // 'date_today' => $this->date_today,
            'date_input' => $this->date_input,
            'date_transaksi' => $this->date_transaksi,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['>=', 'createdAt', $this->createTimeStart])
                      ->andFilterWhere(['<', 'createdAt', $this->createTimeEnd]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'customer', $this->customer])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'id_user', $this->id_user])
            ->andFilterWhere(['like', 'person_name', $this->person_name]);

        return $dataProvider;
    }
}
