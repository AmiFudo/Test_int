<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rate".
 *
 * @property int|null $id
 * @property string|null $name
 * @property string|null $price
 * @property string|null $speed
 * @property string|null $description
 */
class Rate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'speed'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 200],
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
            'speed' => 'Speed',
            'description' => 'Description',
        ];
    }
}