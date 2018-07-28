<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "schedule".
 *
 * @property int $id
 * @property int $id_booking
 * @property int $id_vehicle
 *
 * @property BookingOrder[] $bookingOrders
 * @property BookingOrder[] $bookingOrders0
 * @property BookingOrder $booking
 * @property Vehicle $vehicle
 */
class Schedule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'schedule';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_booking', 'id_vehicle'], 'integer'],
            [['id_booking'], 'exist', 'skipOnError' => true, 'targetClass' => BookingOrder::className(), 'targetAttribute' => ['id_booking' => 'id']],
            [['id_vehicle'], 'exist', 'skipOnError' => true, 'targetClass' => Vehicle::className(), 'targetAttribute' => ['id_vehicle' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_booking' => 'Id Booking',
            'id_vehicle' => 'Id Vehicle',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingOrders()
    {
        return $this->hasMany(BookingOrder::className(), ['name_driver' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingOrders0()
    {
        return $this->hasMany(BookingOrder::className(), ['vehicle' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooking()
    {
        return $this->hasOne(BookingOrder::className(), ['id' => 'id_booking']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicle()
    {
        return $this->hasOne(Vehicle::className(), ['id' => 'id_vehicle']);
    }
}
