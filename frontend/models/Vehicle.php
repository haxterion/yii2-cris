<?php

namespace frontend\models;

use Yii;
use frontend\models\DriverSearch;
/**
 * This is the model class for table "vehicle".
 *
 * @property int $id
 * @property string $licence_plat
 * @property string $vehicle_type
 * @property string $vehicle_status
 * @property string $partner
 * @property int $id_driver
 * @property int $status_schedule
 *
 * @property Maintence[] $maintences
 * @property Schedule[] $schedules
 * @property Schedule $statusSchedule
 * @property Driver $driver
 */
class Vehicle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vehicle';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_driver', 'status_schedule'], 'integer'],
            [['licence_plat', 'vehicle_status'], 'string', 'max' => 10],
            [['vehicle_type', 'partner'], 'string', 'max' => 50],
        //     [['status_schedule'], 'exist', 'skipOnError' => true, 'targetClass' => Schedule::className(), 'targetAttribute' => ['status_schedule' => 'id']],
        //     [['id_driver'], 'exist', 'skipOnError' => true, 'targetClass' => Driver::className(), 'targetAttribute' => ['id_driver' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'licence_plat' => 'Licence Plat',
            'vehicle_type' => 'Vehicle Type',
            'vehicle_status' => 'Vehicle Status',
            'partner' => 'Partner',
            'id_driver' => 'Id Driver',
            'status_schedule' => 'Status Schedule',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaintences()
    {
        return $this->hasMany(Maintence::className(), ['vehicle_type' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules()
    {
        return $this->hasMany(Schedule::className(), ['id_vehicle' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatusSchedule()
    {
        return $this->hasOne(Schedule::className(), ['id' => 'status_schedule']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDriver()
    {
        return $this->hasOne(Driver::className(), ['id' => 'id_driver']);
    }
}
