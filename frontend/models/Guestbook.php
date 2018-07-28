<?php

namespace frontend\models;
use frontend\controllers\GuestbookController;

use Yii;

/**
 * This is the model class for table "guestbook".
 *
 * @property string $id
 * @property string $customer
 * @property string $phone_number
 * @property string $address
 * @property string $date_today
 * @property string $date_input
 * @property string $date_transaksi
 * @property int $status
 * @property string $id_user
 * @property string $person_name
 *
 * @property BookingOrder[] $bookingOrders
 * @property RecordGuestbook $status0
 * @property RecordGuestbook[] $recordGuestbooks
 */
class Guestbook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guestbook';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['phone_number'], 'string', 'max' => 100],
            [['date_input', 'date_transaksi'], 'date', 'format'=>'yyyy-mm-dd'],
            [['status'], 'string', 'min' => 1],
            [['id'], 'string', 'max' => 10],
            [['customer', 'person_name'], 'string', 'max' => 100],
            [['address'], 'string', 'max' => 200],
            [['id_user'], 'string', 'max' => 20],
            [['id'], 'unique'],
            //[['status'], 'exist', 'skipOnError' => true, 'targetClass' => RecordGuestbook::className(), 'targetAttribute' => ['status' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer' => 'Customer',
            'phone_number' => 'Phone Number',
            'address' => 'Address',
            // 'date_today' => 'Date Today',
            'date_input' => 'Date Input',
            'date_transaksi' => 'Date Transaksi',
            // 'status' => 'Status',
            'id_user' => 'Id User',
            'person_name' => 'Person Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingOrders()
    {
        return $this->hasMany(BookingOrder::className(), ['id_guestbook' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(RecordGuestbook::className(), ['status' => 'status']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecordGuestbooks()
    {
        return $this->hasMany(RecordGuestbook::className(), ['id_guestbook' => 'id']);
    }
}
