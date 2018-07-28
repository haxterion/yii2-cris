<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Bookingorder;

/**
 * BookingorderSearch represents the model behind the search form of `frontend\models\Bookingorder`.
 */
class BookingorderSearch extends Bookingorder
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name_driver', 'vehicle', 'packet', 'price', 'id_user'], 'integer'],
            [['id_guestbook', 'guest_name', 'address', 'first_date', 'last_date', 'origin', 'destination', 'date_today', 'date_input', 'date_transaksi', 'person_name'], 'safe'],
            [['guest_phone'], 'number'],
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
        $query = Bookingorder::find();

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
            'name_driver' => $this->name_driver,
            'guest_phone' => $this->guest_phone,
            'first_date' => $this->first_date,
            'last_date' => $this->last_date,
            'vehicle' => $this->vehicle,
            'packet' => $this->packet,
            'price' => $this->price,
            'date_today' => $this->date_today,
            'date_input' => $this->date_input,
            'date_transaksi' => $this->date_transaksi,
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['like', 'id_guestbook', $this->id_guestbook])
            ->andFilterWhere(['like', 'guest_name', $this->guest_name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'origin', $this->origin])
            ->andFilterWhere(['like', 'destination', $this->destination])
            ->andFilterWhere(['like', 'person_name', $this->person_name]);

        return $dataProvider;
    }
}
