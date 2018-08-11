<?php

namespace frontend\models;
use frontend\controllers\GuestbookController;
use yii\db\ActiveQuery;

use Yii;

/**
 * This is the model class for table "guestbook".
 *
 * @property string $id
 * @property string $id_guestbook
 * @property string $customer
 * @property string $phone_number
 * @property string $address
 * @property string $date_today
 * @property string $date_input
 * @property string $date_transaksi
 * @property int $status
 * @property string $id_user
 * @property string $person_name
//  *
//  * @property BookingOrder[] $bookingOrders
//  * @property RecordGuestbook $status0
//  * @property RecordGuestbook[] $recordGuestbooks
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
            // [['id'], 'required'],
            [['status_order','status_schedule','status_close'], 'integer'],
            [['phone_number'], 'string', 'max' => 100],
            [['date_input', 'date_transaksi', 'date_today'], 'date'],
            [['status'], 'string', 'min' => 1],
            // [['id'], 'string', 'max' => 10],
            [['guest','guest_pn','guest_address','vehicle','origin','destination','explanation','price'], 'string', 'min' =>1],
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
            // 'id' => 'ID',
            'customer' => 'Customer',
            'phone_number' => 'Phone Number',
            'address' => 'Address',
            'guest' => 'Guest',
            'guest_pn' => 'Guest Phone',
            'guest_address' => 'Guest Address',
            'date_today' => 'Date Today',
            'date_input' => 'Date Input',
            'date_transaksi' => 'Date Transaksi',
            'vehicle' => 'Vehicle',
            'origin' => 'Origin',
            'destination' => 'Destination',
            'explanation' => 'Explanation',
            'price' => 'Price',
            'status' => 'Status',
            'status_order' => 'Order',
            'status_schedule' => 'Schedule',
            'status_close' => 'Close',
            'id_user' => 'Id User',
            'person_name' => 'Person Name',
        ];
    }

    public function setIdGuestbook($value){
        $this->id = $value;
    }
    
    public function getIdGuestbook(){
        return $this->id;
    }
    
    public function hariini()
    {
        $expression = new \yii\db\Expression('NOW()');
        $datenow = (new \yii\db\Query())->select($expression)->scalar(); 
        return $datenow;        
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
