<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property int|null $sku
 * @property string $brand_name
 * @property string $model_name
 * @property string $model_part_nuber
 * @property string $category
 * @property float $price
 * @property string|null $description
 * @property string|null $image
 */
class Products extends \yii\db\ActiveRecord
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
            [['brand_name', 'model_name', 'model_part_nuber', 'category', 'price'], 'required'],
            [['price'], 'number'],
            [['description', 'image'], 'string'],
            [['brand_name', 'model_name', 'category'], 'string', 'max' => 100],
            [['model_part_nuber'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sku' => 'Sku',
            'brand_name' => 'Brand Name',
            'model_name' => 'Model Name',
            'model_part_nuber' => 'Model Part Nuber',
            'category' => 'Category',
            'price' => 'Price',
            'description' => 'Description',
            'image' => 'Image',
        ];
    }
}
