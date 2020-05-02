<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property int|null $sku
 * @property string $brand_name
 * @property string $model_name
 * @property string $model_part_number
 * @property string $category
 * @property float $price
 * @property string|null $description
 * @property string|null $image
 */
class Products extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sku'], 'integer'],
            [['brand_name', 'model_name', 'model_part_number', 'category', 'price'], 'required'],
            [['price'], 'number'],
            [['description', 'image'], 'string'],
            [['brand_name', 'model_name', 'category'], 'string', 'max' => 100],
            [['model_part_number'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            //'sku' => 'Sku',
            'brand_name' => 'Brand Name',
            'model_name' => 'Model Name',
            'model_part_number' => 'Model Part Number',
            'category' => 'Category Name',
            'price' => 'Price',
            'description' => 'Description',
            'image' => 'Image',
        ];
    }
}
