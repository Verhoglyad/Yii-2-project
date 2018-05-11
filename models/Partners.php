<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.04.2018
 * Time: 10:48
 */

namespace app\models;


use yii\db\ActiveRecord;

class Partners extends ActiveRecord
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
        return 'partners';
    }
}