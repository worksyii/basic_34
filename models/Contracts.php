<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contracts".
 *
 * @property int $id
 * @property string|null $date
 * @property string $name_surname
 * @property string $idnp
 * @property int|null $phone
 * @property string|null $contract_type
 * @property string|null $brand_name
 * @property string|null $model_name
 * @property int|null $imei
 * @property int|null $price
 * @property int|null $discount
 * @property float|null $amount
 */
class Contracts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contracts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['name_surname', 'idnp'], 'required'],
            [['phone', 'imei', 'price', 'discount'], 'integer'],
            [['amount'], 'number'],
            [['name_surname'], 'string', 'max' => 100],
            [['idnp', 'contract_type', 'brand_name', 'model_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'name_surname' => 'Consumer',
            'idnp' => 'IDNP',
            'phone' => 'Phone',
            'contract_type' => 'Contract Type',
            'brand_name' => 'Brand Name',
            'model_name' => 'Model Name',
            'imei' => 'IMEI',
            'price' => 'Price',
            'discount' => 'Discount',
            'amount' => 'Amount',
        ];
    }
}
