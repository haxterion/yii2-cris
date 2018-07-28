<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "packet".
 *
 * @property int $id
 * @property string $name
 * @property string $price
 *
 * @property BookingOrder[] $bookingOrders
 */
class Packet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'packet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['name'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingOrders()
    {
        return $this->hasMany(BookingOrder::className(), ['packet' => 'id']);
    }
}
