<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17.04.2018
 * Time: 17:06
 */

namespace app\models;


use yii\db\ActiveRecord;

class Brand extends ActiveRecord
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
        return 'brand';
    }

    public function getProducts(){
        return $this->hasMany(Product::className(), ['brand' => 'id']);
    }
}