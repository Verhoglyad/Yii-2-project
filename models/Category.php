<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 04.04.2018
 * Time: 14:59
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]

        ];
    }

    public static function tableName(){
        return 'category_product';
    }

    public function getProducts(){
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }

    public function getParent(){
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }
}