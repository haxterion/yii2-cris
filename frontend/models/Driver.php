<?php

namespace frontend\models;

use Yii;
use frontend\models\DriverSearch;

/**
 * This is the model class for table "driver".
 *
 * @property int $id
 * @property string $name
 * @property string $phone_number
 * @property string $address
 * @property string $status
 * @property int $status_schedule
 *
 * @property Vehicle[] $vehicles
 */
class Driver extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'driver';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone_number'], 'number'],
            [['status_schedule'], 'integer'],
            [['name', 'address'], 'string', 'max' => 200],
            [['status'], 'string', 'max' => 50],
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
            'phone_number' => 'Phone Number',
            'address' => 'Address',
            'status' => 'Status',
            'status_schedule' => 'Status Schedule',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicles()
    {
        return $this->hasMany(Vehicle::className(), ['id_driver' => 'id']);
    }
}
