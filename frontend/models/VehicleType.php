<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "vehicle_type".
 *
 * @property int $id
 * @property string $type
 * @property string $vendor
 */
class VehicleType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vehicle_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'vendor'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'vendor' => 'Vendor',
        ];
    }
}
