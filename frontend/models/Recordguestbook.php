<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "recordguestbook".
 *
 * @property int $id
 * @property string $id_guestbook
 * @property string $date_phone
 * @property string $date_today
 * @property string $date_input
 * @property string $date_transaksi
 * @property int $price
 * @property string $explanation
 * @property int $status
 * @property int $id_user
 * @property int $person_name
 *
 * @property Guestbook[] $guestbooks
 * @property Guestbook $guestbook
 */
class Recordguestbook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'record_guestbook';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_phone', 'date_today', 'date_input', 'date_transaksi'], 'safe'],
            [['price', 'id_user'], 'integer'],
            [['status'], 'string'],
            [['id_guestbook'], 'string', 'max' => 10],
            [['person_name'], 'string', 'max' => 100],
            [['explanation'], 'string', 'max' => 250],
            [['id_guestbook'], 'exist', 'skipOnError' => true, 'targetClass' => Guestbook::className(), 'targetAttribute' => ['id_guestbook' => 'id']],
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
            'date_phone' => 'Date Phone',
            'date_today' => 'Date Today',
            'date_input' => 'Date Input',
            'date_transaksi' => 'Date Transaksi',
            'price' => 'Price',
            'explanation' => 'Explanation',
            'status' => 'Status',
            'id_user' => 'Id User',
            'person_name' => 'Person Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGuestbooks()
    {
        return $this->hasMany(Guestbook::className(), ['status' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGuestbook()
    {
        return $this->hasOne(Guestbook::className(), ['id' => 'id_guestbook']);
    }
}
