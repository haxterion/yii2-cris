<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "booking_order".
 *
 * @property int $id
 * @property string $id_guestbook
 * @property string $guest_name
 * @property int $name_driver
 * @property string $guest_phone
 * @property string $address
 * @property string $first_date
 * @property string $last_date
 * @property int $vehicle
 * @property string $origin
 * @property string $destination
 * @property int $packet
 * @property int $price
 * @property string $date_today
 * @property string $date_input
 * @property string $date_transaksi
 * @property int $id_user
 * @property string $person_name
 *
 * @property Guestbook $guestbook
 * @property Schedule $nameDriver
 * @property Schedule $vehicle0
 * @property Packet $packet0
 * @property Schedule[] $schedules
 */
class BookingOrder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'booking_order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['packet', 'price', 'id_user'], 'integer'],
            [['name_driver', 'vehicle'], 'string'],
            [['guest_phone'], 'number'],
            [['first_date', 'last_date', 'date_input', 'date_transaksi'], 'safe'],
            [['id_guestbook', 'guest_name'], 'string', 'max' => 200],
            [['address'], 'string', 'max' => 250],
            [['origin', 'destination', 'person_name'], 'string', 'max' => 100],
            [['id_guestbook'], 'exist', 'skipOnError' => true, 'targetClass' => Guestbook::className(), 'targetAttribute' => ['id_guestbook' => 'id']],
            // [['name_driver'], 'exist', 'skipOnError' => true, 'targetClass' => Schedule::className(), 'targetAttribute' => ['name_driver' => 'id']],
            // [['vehicle'], 'exist', 'skipOnError' => true, 'targetClass' => Schedule::className(), 'targetAttribute' => ['vehicle' => 'id']],
            [['packet'], 'exist', 'skipOnError' => true, 'targetClass' => Packet::className(), 'targetAttribute' => ['packet' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_guestbook' => 'Id Guestbook',
            'guest_name' => 'Guest Name',
            'name_driver' => 'Name Driver',
            'guest_phone' => 'Guest Phone',
            'address' => 'Address',
            'first_date' => 'First Date',
            'last_date' => 'Last Date',
            'vehicle' => 'Vehicle',
            'origin' => 'Origin',
            'destination' => 'Destination',
            'packet' => 'Packet',
            'price' => 'Price',
            // 'date_today' => 'Date Today',
            'date_input' => 'Date Input',
            'date_transaksi' => 'Date Transaksi',
            'id_user' => 'Id User',
            'person_name' => 'Person Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGuestbook()
    {
        return $this->hasOne(Guestbook::className(), ['id' => 'id_guestbook']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNameDriver()
    {
        return $this->hasOne(Schedule::className(), ['id' => 'name_driver']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicle0()
    {
        return $this->hasOne(Schedule::className(), ['id' => 'vehicle']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPacket0()
    {
        return $this->hasOne(Packet::className(), ['id' => 'packet']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules()
    {
        return $this->hasMany(Schedule::className(), ['id_booking' => 'id']);
    }
}
